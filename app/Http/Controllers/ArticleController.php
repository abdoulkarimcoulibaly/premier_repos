<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;





class ArticleController extends Controller
{
    public function index(){
        $articles = Article::orderByDesc('created_at')->get();
        return view('index',['articles' => $articles]);
    }

    public function getArticle(Request $request){
        $article_id = $request->input('id');
        $article = Article::where('id',$article_id)->get();
        $comments = Comment::where('article_id',$article_id)->get();
        return view('show',['article' => $article,'comments' => $comments]);
    }
}
