@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

    <ul>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Anggota: {{ $totalMembers }}</li>
        <li>Total Transaksi Peminjaman: {{ $totalBorrowings }}</li>
        <li>Transaksi Sedang Berjalan: {{ $activeBorrowings }}</li>
    </ul>

    <div style="margin-top: 20px;">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
@endsection