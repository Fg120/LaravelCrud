<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/article');
    // return view('welcome');
});

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/show/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
Route::post('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');
Route::get('/article/destroy/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
