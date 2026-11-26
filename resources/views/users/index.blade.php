@extends('layouts.app')

@section('title', 'Daftar User')

@section('content')
    <h2>{{ $title ?? 'Daftar User' }}</h2>
    <h3>{{ $description ?? 'Kelola Akun Admin dan Petugas' }}</h3>

    <a href="{{ route('users.create') }}">+ Tambah User</a>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 12px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $user)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                        @if (auth()->id() !== $user->id)
                            |
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data user.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection