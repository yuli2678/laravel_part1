<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovelController;

Route::get('/', [NovelController::class, 'index'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});
