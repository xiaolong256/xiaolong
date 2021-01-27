<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Article;
class LoginController extends Controller
{
    //

    public function login()
    {
       return view('admin.login');
    }
   public function validated(Request $request)
   {
      $validatedData = $request->validate([
        'username' => 'required',
        'password' => 'required',
      ]);
      $username = $request->input('username');
      $password = $request->input('password');
      
      $admin = Admin::where('name',$username)->first();
      if(!$admin) {
         return redirect()->route('admin.login')->with('status','用户名或密码不正确');
      }
      $pass = Admin::where('password',$password)->first();
      if(!$pass){
          return redirect()->route('admin.login')->with('status','用户名或密码不正确');   
      } 
      session()->put('admin',$admin);
      return redirect()->route('admin.index')->with('status','登录成功');
   }

  public function index()
  {   

      $articles = Article::paginate(4);
      return view('admin.index',compact("articles"));
  }

  public function logout()
 {
   session()->forget('admin');
  return redirect()->route('admin.login')->with('status','退出成功');
 }
}
