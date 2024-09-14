<?php

namespace App\Http\Controllers;
use App\Models\Books;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $books = Books::all();
        $totalBooks = $books->count();
        $totalHarga = $books->sum('harga');
        return view('index', compact('books', 'totalBooks', 'totalHarga'));
    }
}
