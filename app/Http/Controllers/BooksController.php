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

    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $books = new books;
        $books->title = $request->title;
        $books->author = $request->author;
        $books->harga = $request->harga;
        $books->tanggal_terbit = $request->tanggal_terbit;
        $books->save();

        return redirect('/index');
    }

    public function destroy($id){
        $books = Books::find($id);
        $books->delete();
        return redirect('/index');
    }   

    public function edit($id){
        $books = Books::find($id);
        return view('edit', compact('books'));
    }
    public function update(Request $request, $id){
    $books = Books::find($id);
    $books->title = $request->input('title');
    $books->author = $request->input('author');
    $books->harga = $request->input('harga');
    $books->tanggal_terbit = $request->input('tanggal_terbit');
    $books->save();

    return redirect('/index');
}

}
