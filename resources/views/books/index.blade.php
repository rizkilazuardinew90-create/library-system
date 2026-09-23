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
@endsection