<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');



// ------------ Articoli -------------

//Crea articolo
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

//Tutti gli articoli
Route::get('/article/index', [ArticleController::class, 'index']) ->name('article.index');

// Dettaglio Articolo
Route::get ('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

// Dettaglio Categoria
Route::get ('/category/{category}', [ArticleController::class, 'byCategory']) ->name ('byCategory');