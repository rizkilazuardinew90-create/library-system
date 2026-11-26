@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h2>Edit Data User</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nama</label><br>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
        </div>
        <br>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
        </div>
        <br>

        <div>
            <label for="role">Role</label><br>
            <select name="role" id="role" required>
                <option value="admin" @selected(old('role', $user->role) === 'admin')>Admin</option>
                <option value="petugas" @selected(old('role', $user->role) === 'petugas')>Petugas</option>
            </select>
        </div>
        <br>

        <div>
            <label for="password">Password Baru (kosongkan jika tidak diubah)</label><br>
            <input type="password" name="password" id="password">
        </div>
        <br>

        <div>
            <label for="password_confirmation">Konfirmasi Password Baru</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation">
        </div>
        <br>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('users.index') }}">Kembali</a>
    </form>
@endsection