<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovelController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman home pakai controller
Route::get('/home', [NovelController::class, 'index'])->name('home');
