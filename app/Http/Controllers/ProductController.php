<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $products = Product::query();

        if ($keyword) {
            $products->where('judul', 'like', "%$keyword%")
                     ->orWhere('penulis', 'like', "%$keyword%")
                     ->orWhere('genre', 'like', "%$keyword%");
        }

        $message = 'Daftar Novel';
        $products = $products->get();

        return view('products.index', compact('products', 'message', 'keyword'));
    }
}
