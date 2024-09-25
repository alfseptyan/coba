<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [BooksController::class, 'index']);
Route::get('/index/create', [BooksController::class, 'create'])->name('create');
Route::post('/index', [BooksController::class, 'store'])->name('store');
Route::delete('/index/{id}', [BooksController::class, 'destroy'])->name('destroy');
Route::get('/index/{id}/edit', [BooksController::class, 'edit'])->name('edit');
Route::put('/index/{id}/update', [BooksController::class, 'update'])->name('update');