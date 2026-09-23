<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Stoicism (Ancient Philosophies)',
                'author' => 'John Sellars',
                'year' => 2006,
                'stock' => 10
            ],
            [
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'year' => 2014,
                'stock' => 5
            ],
            [
                'title' => 'Veronica Decides to Die',
                'author' => 'Paulo Coelho',
                'year' => 1998,
                'stock' => 8
            ],
            [
                'title' => 'Happiness for People Who Can\'t Stand Positive Thinking',
                'author' => 'Oliver Burkeman',
                'year' => 2012,
                'stock' => 12
            ],
            [
                'title' => 'Think Like a Roman Emperor: The Stoic Philosophy of Marcus Aurelius',
                'author' => 'Donald Robertson',
                'year' => 2020,
                'stock' => 7
            ]
        ]);
    }
}
