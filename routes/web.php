<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/articles', [PublicController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [PublicController::class, 'create'])->name('articles.create');
Route::post('/articles/store', [PublicController::class, 'store'])->name('articles.store');
Route::get('/articles/{article}/show', [PublicController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [PublicController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [PublicController::class, 'update'])->name('articles.update');
Route::delete('/articles/{article}', [PublicController::class, 'destroy'])->name('articles.destroy');
