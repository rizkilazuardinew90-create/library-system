@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
    <h2>Tambah User Baru</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nama</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <br>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>
        <br>

        <div>
            <label for="role">Role</label><br>
            <select name="role" id="role" required>
                <option value="">Pilih Role</option>
                <option value="admin" @selected(old('role') === 'admin')>Admin</option>
                <option value="petugas" @selected(old('role') === 'petugas')>Petugas</option>
            </select>
        </div>
        <br>

        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required>
        </div>
        <br>

        <div>
            <label for="password_confirmation">Konfirmasi Password</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <br>

        <button type="submit">Simpan User</button>
        <a href="{{ route('users.index') }}">Kembali</a>
    </form>
@endsection