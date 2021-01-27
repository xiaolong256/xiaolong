<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ArticleController extends Controller
{
    //
      
  //更新话题页面
   public function  update(Request $request,$id)
   { 
      $article = Article::where('id',$id)->first();
     //dd($article);
      return view('admin.update',['article'=>$article]);
   }
 //删除话题
   public function delete($id)
   {
        $article = Article::where('id',$id)->delete();
         return redirect()->route('admin.index')->with('status','话题删除成功');
   }
  //添加话题页面
   public function create()
   {
     return view('admin.create');  
   }
 //添加话题
   public function store(Request $request)
   {
       $title = $request->input('title');
       $content = $request->input('content');  
       $article = new Article;
       $article->title = $title;
       $article->content = $content;
       $article->admin_id =session('user')->id;
       $article->save();
       return redirect()->route('admin.index')->with('status','话题添加成功');
   }
 //更新话题
   public function edit(Request $request,$id)
   {
      $title = $request->input('title');
      $content = $request->input('content');
      $article = Article::find($id);
      $article->title = $title;
      $article->content = $content;
      $article->save();
      return redirect(route('admin.index'))->with('status','话题修改成功');
   }
}
