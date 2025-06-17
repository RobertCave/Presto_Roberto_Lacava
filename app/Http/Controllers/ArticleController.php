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
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
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
        $articles = $category->articles->where('is_accepted', true);
        return view('article.byCategory', compact('articles' , 'category'));
    }


    // middleware per bloccare la creazione di un articolo solo ad utenti registrati
    public static function middleware(): array
    {
        return [
            new Middleware('auth', only: ['create']),
        ];
    }

    // Ricerca articolo/Annuncio
    // ----> mi è sembrato più corretto usare il controller Article invece che Public controller
    // Spero vada bene :-)
    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);
        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }



}
