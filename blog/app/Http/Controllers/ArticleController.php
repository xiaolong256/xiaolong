<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    //
    public function  detail(Request $request)
    { 
        $article_id = $request->input('id');
        $article = Article::find($article_id);
//dd($article);
        return view('detail',compact('article'));
    }

}
