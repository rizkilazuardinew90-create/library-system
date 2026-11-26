@extends('layouts.app')

@section('title', 'Tambah Member')

@section('content')
    <h2>Tambah Member Baru</h2>

    <form action="{{ route('members.store') }}" method="POST">
        @csrf

        <div>
            <label for="member_code">Kode Anggota / NPM</label>
            <input type="text" name="member_code" id="member_code" value="{{ old('member_code') }}" required>
            @error('member_code')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="phone">No. Telepon</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
            @error('phone')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="address">Alamat</label>
            <textarea name="address" id="address" rows="2">{{ old('address') }}</textarea>
            @error('address')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan Member</button>
        <a href="{{ route('members.index') }}">Kembali</a>
    </form>
@endsection