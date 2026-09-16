<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('/dashboard');
});

// route for books
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

// route for categories
Route::get('/categories', [CategoryController::class, 'index']);

// route for members
Route::get('/members', [MemberController::class, 'index']);

// route for dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);