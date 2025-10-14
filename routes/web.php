<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductController;

Route::get('/', [NovelController::class, 'index'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
