<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Daftar Kategori';
        $categories = Category::all();

        return view('categories.index', compact('title', 'categories'));
    }
}
