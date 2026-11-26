@extends('layouts.app')

@section('title', 'Daftar Member')

@section('content')
    <h2>{{ $title ?? 'Daftar Member' }}</h2>
    <h3>{{ $description ?? 'Daftar Anggota Perpustakaan' }}</h3>

    <a href="{{ route('members.create') }}">+ Tambah Member</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 12px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Anggota / NPM</th>
                <th>Nama</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($members as $index => $member)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $member->member_code }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->phone ?? '-' }}</td>
                    <td>{{ $member->address ?? '-' }}</td>
                    <td>
                        <a href="{{ route('members.edit', $member->id) }}">Edit</a>
                        |
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus member ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data member.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection