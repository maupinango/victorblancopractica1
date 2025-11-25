<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {

    }

    //Metodo que lista los articulos de la base de datos
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('admin/articles/index', ['articles' => $articles]);        
    }

    //Metodo que muestra el detalle de un articulo
    public function show($article)
    {
        $articleObject = Article::find($article);

        if($articleObject)
        {
            $user = User::find($articleObject->user_id);
            return view('admin/articles/view', ['article' => $articleObject,
                                                'user' => $user]);
        }
        else
        {
            return redirect()->route('articles.index');
        }
    }

    //Metodo que muestra el formulario para crear un nuevo articulo
    public function create()
    {
        return view('admin/articles/create');
    }

    //Metodo que inserta un nuesvo articulo en la base de datos
    public function store(Request $request)
    {
        //AQUI: definir el ArticleRequest
    }
}

?>