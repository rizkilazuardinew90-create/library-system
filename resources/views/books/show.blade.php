@extends('layouts.app')
@section('title', $title)

@section('content')
<h2>{{ $title }}</h2>

@if($book)
    <p><strong>ID:</strong> {{ $book->id }}</p>
    <p><strong>Judul:</strong> {{ $book->title }}</p>
    <p><strong>Penulis:</strong> {{ $book->author }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
    <p><strong>Jumlah Stok:</strong> {{ $book->stock }}</p>
@else
    <p>Buku tidak ditemukan.</p>
@endif

<br>
<a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
@endsection