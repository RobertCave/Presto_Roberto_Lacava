<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');



// ------------ Articoli -------------

//Crea articolo
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

//Tutti gli articoli
Route::get('/article/index', [ArticleController::class, 'index']) ->name('article.index');

// Dettaglio Articolo
Route::get ('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

// Dettaglio Categoria Articoli
Route::get ('/category/{category}', [ArticleController::class, 'byCategory']) ->name ('byCategory');

// Ricerca
Route::get('/article/search', [ArticleController::class, 'searchArticles'])->name('article.search');

 


// ------------  Revisori ------------
//  Dashboard revisori 
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

// Revisori - accettare l'annuncio
Route::patch('/revisor/accept/{article}', [RevisorController::class, 'accept'])->name('accept');

// Revisori - Rifiutare l'annuncio
Route::patch('/revisor/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

// Richiesta per fare il revisore
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name ('revisor.become');

// Creare un revisore
Route::get('/revisor/make/{user}', [RevisorController:: class, 'makeRevisor'])->name( 'revisor.make');



// ------------  Lingua ------------
// Language
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');