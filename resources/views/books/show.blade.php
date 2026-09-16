@extends ('layouts.app')
@section('title', $title)

@section('content')
<h2>{{ $title }}</h2>
@if($book)
    <p><strong>Judul:</strong> {{ $book['title'] }}</p>
    <p><strong>Penulis:</strong> {{ $book['author'] }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book['year'] }}</p>
    <p><strong>ID:</strong> {{ $id }}</p>
@else
    <p>Buku tidak ditemukan.</p>
@endif
@endsection