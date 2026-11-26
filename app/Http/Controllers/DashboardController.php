<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Category;
use App\Models\Member;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System Dashboard';
        $description = 'Selamat datang di Sistem Informasi Perpustakaan.';

        $totalCategories = Category::count();
        $totalBooks = Book::count();
        $totalMembers = Member::count();
        $totalBorrowings = Borrowing::count();
        $activeBorrowings = Borrowing::where('status', 'borrowed')->count();

        return view('dashboard.index', compact(
            'title',
            'description',
            'totalCategories',
            'totalBooks',
            'totalMembers',
            'totalBorrowings',
            'activeBorrowings'
        ));
    }
}