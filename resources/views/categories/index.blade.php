@extends('layouts.app')
@section('title', 'Kategori Buku')

@section('content')

<h2>{{$title}}</h2>

<ul>
    @foreach ($categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
</ul>

@endsection