<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{

    // Visualizza in index gli ultimi 6 articoli
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('article.index', compact('articles'));
    }



    // Visualizza dettaglio articolo singolo
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    // Creazione nuovo articolo
    public function create()
    {
        return view('article.create');
    }


    // Categorie
    public function byCategory(Category $category)
    {
        return view('article.byCategory', ['articles' => $category ->articles, 'category' => $category]);
    }


    // middleware per bloccare la creazione di un articolo solo ad utenti registrati
    public static function middleware(): array
    {
        return [
            new Middleware('auth', only: ['create']),
        ];
    }
}
