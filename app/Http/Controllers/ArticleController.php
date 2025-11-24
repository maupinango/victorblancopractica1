<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('admin/articles/index', ['articles' => $articles]);        
    }

    public function show($article)
    {
        $article = Article::find($article);

        if($article)
        {
            $user = User::find($article->user_id);
            return view('admin/articles/view', ['article' => $article,
                                                'user' => $user]);

            //AQUI: crear la vista view
        }
        else
        {
            return redirect()->route('articles.index');
        }
    }
}

?>