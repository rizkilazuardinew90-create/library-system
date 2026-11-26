@extends('layouts.app')

@section('title', 'Daftar Transaksi Peminjaman')

@section('content')
    <h1>Daftar Transaksi Peminjaman</h1>

    <a href="{{ route('borrowings.create') }}">+ Peminjaman Baru</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('info'))
        <p>{{ session('info') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Anggota</th>
                <th>Petugas</th>
                <th>Buku & Jumlah</th>
                <th>Tanggal Pinjam</th>
                <th>Jatuh Tempo</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($borrowings as $index => $borrowing)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $borrowing->member->name }}</td>
                    <td>{{ $borrowing->user->name }}</td>
                    <td>
                        @foreach ($borrowing->details as $detail)
                            <div>{{ $detail->book->title }} ({{ $detail->quantity }})</div>
                        @endforeach
                    </td>
                    <td>{{ \Carbon\Carbon::parse($borrowing->borrowing_date)->format('d-m-Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($borrowing->due_date)->format('d-m-Y') }}</td>
                    <td>{{ $borrowing->return_date ? \Carbon\Carbon::parse($borrowing->return_date)->format('d-m-Y') : '-' }}</td>
                    <td>{{ $borrowing->status }}</td>
                    <td>
                        @if ($borrowing->status === 'borrowed')
                            <form action="{{ route('borrowings.return', $borrowing->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit">Kembalikan</button>
                            </form>
                        @else
                            <span>Selesai</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9">Belum ada transaksi peminjaman.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection