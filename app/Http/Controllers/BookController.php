<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search', '');
        $books = Book::where('judul', 'like', "%$keyword%")
                    ->orWhere('penulis', 'like', "%$keyword%")
                    ->get();

        $message = $keyword ? "Hasil pencarian untuk: $keyword" : "Daftar Buku Perpustakaan";

        return view('books.index', compact('books', 'keyword', 'message'));
    }
}
