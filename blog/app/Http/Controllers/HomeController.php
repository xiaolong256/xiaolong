<?php

namespace App\Http\Controllers;
use App\Article;
use App\Admin;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $article = Article::paginate(4); 
       return view('home',compact('article'));
    }
}
