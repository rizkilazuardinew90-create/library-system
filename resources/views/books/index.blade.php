@extends('layouts.app')
@section('title', $title)

@section('content')
<h2>{{ $title }}</h2>

<ul>
    @foreach ($books as $book)
        <li><strong>{{ $book['title'] }}</strong> - {{ $book['author'] }} ({{ $book['year'] }})</li>
    @endforeach
</ul>

@if($stock > 0)
 <p>Stok tersedia.</p>
@else
 <p>Stok habis.</p>
@endif
@endsection