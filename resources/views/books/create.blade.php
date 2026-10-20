@extends('layouts.app')
@section('title', 'Tambah Buku Baru')

@section('content')
<h2>Tambah Buku Baru</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label>Judul Buku</label><br>
        <input 
            type="text" 
            name="title" 
            placeholder="Judul Buku" 
            value="{{ old('title') }}" 
        >
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>

    <div>
        <label>Penulis</label><br>
        <input 
            type="text" 
            name="author" 
            placeholder="Penulis" 
            value="{{ old('author') }}" 
        >
        @error('author')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>

    <div>
        <label>Tahun Terbit</label><br>
        <input 
            type="number" 
            name="year" 
            placeholder="Tahun Terbit" 
            value="{{ old('year') }}" 
        >
        @error('year')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>

    <div>
        <label>Jumlah Stok</label><br>
        <input 
            type="text" 
            name="stock" 
            placeholder="Jumlah Stok" 
            value="{{ old('stock') }}" 
        >
        @error('stock')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>

    <button type="submit">Tambah</button>
    <a href="{{ route('books.index') }}">Kembali</a>
</form>
@endsection