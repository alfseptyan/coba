<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/index',[BooksController::class,'index']);
route::get('/index/create',[BooksController::class,'create'])->name('create');
route::post('/index',[BooksController::class,'store'])->name('store');
route::delete('/index/{id}',[BooksController::class,'destroy'])->name('destroy');
route::get('/index/{id}/edit',[BooksController::class,'edit'])->name('edit');
route::put('/index/{id}/update',[BooksController::class,'update'])->name('update');
