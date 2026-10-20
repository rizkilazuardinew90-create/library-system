@extends('layouts.app')
@section('title', $title)

@section('content')

@if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<h2>{{ $title }}</h2>

<ul>
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

        <!-- Tombol Aksi CRUD Per Buku (Show, Edit, Delete) -->
        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('books.show', $book->id) }}">Detail</a>
            <a href="{{ route('books.edit', $book->id) }}">Edit</a>

            <!-- Form Hapus di DALAM loop foreach -->
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </div>

        <hr>
    </li>
    @endforeach
</ul>

<h3>Tambah Buku Baru</h3>
<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label>Judul Buku</label><br>
        <input type="text" name="title" placeholder="Judul Buku" value="{{ old('title') }}" required>
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>
    <div>
        <label>Penulis</label><br>
        <input type="text" name="author" placeholder="Penulis" value="{{ old('author') }}" required>
        @error('author')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>
    <div>
        <label>Tahun Terbit</label><br>
        <input type="number" name="year" placeholder="Tahun Terbit" value="{{ old('year') }}" required>
        @error('year')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>
    <div>
        <label>Jumlah Stok</label><br>
        <input type="number" name="stock" placeholder="Jumlah Stok" value="{{ old('stock') }}" required>
        @error('stock')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>
    <button type="submit">Tambah</button>
</form>

@endsection