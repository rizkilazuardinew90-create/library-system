<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = 'Daftar Kategori';
        $description = 'Daftar Kategori Buku yang tersedia di Perpustakaan';
        $categories = [
            'Fiksi',
            'Non-Fiksi',
            'Sains',
            'Sejarah',
            'Literatur'
        ];

        return view('categories.index', compact('title', 'description', 'categories'));
    }
}
