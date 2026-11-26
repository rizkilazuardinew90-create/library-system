@extends('layouts.app')
@section('title', $title)

@section('content')

@if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<h2>{{ $title }}</h2>

<a href="{{ route('books.create') }}">+ Tambah Buku</a>

<ul style="margin-top: 12px;">
    @foreach ($books as $book)
    <li>
        <h3>{{ $book->title }}</h3>
        <p>Author: {{ $book->author }}</p>
        <p>Year: {{ $book->year }}</p>
        <p>Category: {{ $book->category ? $book->category->name : 'Tidak ada kategori' }}</p>
        <p>Stock: {{ $book->stock }}</p>

        @if($book->stock > 0)
            <p style="color: green;">Stok tersedia.</p>
        @else
            <p style="color: red;">Stok habis.</p>
        @endif

        <div style="display: flex; gap: 10px; align-items: center;">
            <a href="{{ route('books.show', $book->id) }}">Detail</a>
            <a href="{{ route('books.edit', $book->id) }}">Edit</a>

            @can('delete', $book)
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            @endcan
        </div>

        <hr>
    </li>
    @endforeach
</ul>

@endsection