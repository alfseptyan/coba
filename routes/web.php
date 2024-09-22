<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('welcome');
});
route::get('/index',[BooksController::class,'index']);
