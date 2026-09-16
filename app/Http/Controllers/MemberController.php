<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $title = 'Daftar Anggota';
        $description = 'Daftar Anggota Perpustakaan';
        $members = [
            [
                'name' => 'Rizki Lazuardi',
                'NPM' => '2410631250075'
            ],
            [
                'name' => 'Lana Putri',
                'NPM' => '2410631250076'
            ],
            [
                'name' => 'Alex Johnson',
                'NPM' => '2410631250077'
            ],
            [
                'name' => 'Bob Williams',
                'NPM' => '2410631250078'
            ],
            [
                'name' => 'Charlie Brown',
                'NPM' => '2410631250079'
            ]
        ];

        return view('members.index', compact('title', 'description', 'members'));
    }
}