@extends('layouts.app')
@section('title', $title)

@section('content')
<h2>{{ $title }}</h2>

<ul>
    <!-- @foreach ($books as $book)
        <li><strong>{{ $book['title'] }}</strong> - {{ $book['author'] }} ({{ $book['year'] }})</li>
    @endforeach -->

    @foreach ($books as $book)
    <li>
        <h3>{{ $book->title }}</h3>
        <p>Author: {{ $book->author }}</p>
        <p>Year: {{ $book->year }}</p>
        <p>Stock: {{ $book->stock }}</p>

        @if($book->stock > 0)
        <p style="color: green;">Stok tersedia.</p>
        @else
        <p style="color: red;">Stok habis.</p>
        @endif
        <hr>
    </li>
    @endforeach
</ul>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Judul Buku" required>
    <input type="text" name="author" placeholder="Penulis" required>
    <input type="number" name="year" placeholder="Tahun Terbit" required>
    <input type="number" name="stock" placeholder="Jumlah Stok" required>

    <button type="submit">Tambah</button>
</form>

<form
    action="{{ route('books.destroy', $book['id']) }}"
    method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')"
>
    @csrf
    @method('DELETE')

    <button type="submit">
        Hapus
    </button>
</form>

@endsection