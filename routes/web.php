<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CategoryController;

Route::get('/',[ViewsController::class,'showHomepage'])->name('homepage');
Route::get('/articoli',[ArticleController::class,'showArticles'])->middleware(['auth'])->name('articles');
Route::get('/crea-articolo',[ViewsController::class,'showArticleForm'])->middleware(['auth'])->name('article.form');
Route::post('/articoli/utente',[ArticleController::class,'store'])->middleware(['auth'])->name('articles.store');
Route::get('/articolo/{id}',[ArticleController::class,'showArticle'])->name('article');
Route::get('/contattaci',[MailController::class, 'showMailForm'])->middleware(['auth'])->name('mail.form');
Route::post('/manda-ticket',[MailController::class,'sendMail'])->middleware(['auth'])->name('send.mail');
Route::get('/dashboard',[ViewsController::class,'showDashboard'])->middleware(['auth'])->name('dashboard');
Route::resource('categories', CategoryController::class);

Route::get('/articolo-per-autore/{author}',[ArticleController::class,'showArticlesByAuthor'])->name('article.byAuthor');
