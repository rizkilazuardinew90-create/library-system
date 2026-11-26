@extends('layouts.app')
@section('title', 'Tambah Buku Baru')

@section('content')
<h2>Tambah Buku Baru</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Judul Buku</label><br>
        <input 
            type="text" 
            name="title" 
            id="title"
            placeholder="Judul Buku" 
            value="{{ old('title') }}" 
        >
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>

    <div>
        <label for="author">Penulis</label><br>
        <input 
            type="text" 
            name="author" 
            id="author"
            placeholder="Penulis" 
            value="{{ old('author') }}" 
        >
        @error('author')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>

    <div>
        <label for="year">Tahun Terbit</label><br>
        <input 
            type="number" 
            name="year" 
            id="year"
            placeholder="Tahun Terbit" 
            value="{{ old('year') }}" 
        >
        @error('year')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>

    <div>
        <label for="category_id">Kategori</label><br>
        <select name="category_id" id="category_id">
            <option value="">Pilih Kategori</option>

            @foreach ($categories as $category)
                <option 
                    value="{{ $category->id }}" @selected(old('category_id') == $category->id)
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        
        @error('category_id')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
    <br>

    <div>
        <label for="stock">Jumlah Stok</label><br>
        <input 
            type="number" 
            name="stock" 
            id="stock"
            min="1"
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