<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

// route for books
Route::get('/books', [BookController::class, 'index']);

// route for categories
Route::get('/categories', [CategoryController::class, 'index']);

// route for members
Route::get('/members', [MemberController::class, 'index']);
