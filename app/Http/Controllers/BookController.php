<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $title = 'Daftar Buku yang Tersedia';
        // $books = [
        //     [
        //         'title' => 'Stoicism (Ancient Philosophies)',
        //         'author' => 'John Sellars',
        //         'year' => 2006
        //         ],
        //     [
        //         'title' => 'Filosofi Teras',
        //         'author' => 'Henry Manampiring',
        //         'year' => 2014
        //         ],
        //     [
        //         'title' => 'Veronica Decides to Die',
        //         'author' => 'Paulo Coelho',
        //         'year' => 1998
        //         ],
        //     [
        //         'title' => 'Happiness for People Who Can\'t Stand Positive Thinking',
        //         'author' => 'Oliver Burkeman',
        //         'year' => 2012
        //         ],
        //     [
        //         'title' => 'Think Like a Roman Emperor: The Stoic Philosophy of Marcus Aurelius',
        //         'author' => 'Donald Robertson',
        //         'year' => 2020
        //         ]
        // ];

        $books = Book::all();

        return view('books.index', compact('books', 'title'));
    }

    public function show($id)
    {
        $title = 'Detail Buku';
        // $books = [
        //     1 => [
        //         'title' => 'Stoicism (Ancient Philosophies)',
        //         'author' => 'John Sellars',
        //         'year' => 2006
        //     ],
        //     2 => [
        //         'title' => 'Filosofi Teras',
        //         'author' => 'Henry Manampiring',
        //         'year' => 2014
        //     ],
        //     3 => [
        //         'title' => 'Veronica Decides to Die',
        //         'author' => 'Paulo Coelho',
        //         'year' => 1998
        //     ],
        //     4 => [
        //         'title' => 'Happiness for People Who Can\'t Stand Positive Thinking',
        //         'author' => 'Oliver Burkeman',
        //         'year' => 2012
        //     ],
        //     5 => [
        //         'title' => 'Think Like a Roman Emperor: The Stoic Philosophy of Marcus Aurelius',
        //         'author' => 'Donald Robertson',
        //         'year' => 2020
        //     ]
        // ];

        $book = Book::find($id);

        return view('books.show', compact('title', 'book', 'id'));
    }
}
