<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/dashboard');
});

// route for books
// Route::get('/books', [BookController::class, 'index']);
// Route::get('/books/{id}', [BookController::class, 'show']);

Route::resource('books', BookController::class);

// route for categories
Route::get('/categories', [CategoryController::class, 'index']);

// route for members
Route::get('/members', [MemberController::class, 'index']);

// route for dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// route for authentication 
Route::middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login.submit');
});

Route::post('\logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    // route books
    Route::resource('books', BookController::class);
});