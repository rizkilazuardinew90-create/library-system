<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System Dashboard';
        $description = 'Selamat datang di Sistem Informasi Perpustakaan.';
        $bukudummy = 'Jumlah buku yang tersedia: 5';
        $kategoridummy = 'Jumlah kategori buku: 5';
        $membersdummy = 'Jumlah member: 5';

        return view('dashboard.index', compact('title', 'description', 'bukudummy', 'kategoridummy', 'membersdummy'));
    }
}