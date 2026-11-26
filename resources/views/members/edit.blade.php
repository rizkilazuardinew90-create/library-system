@extends('layouts.app')

@section('title', 'Edit Member')

@section('content')
    <h2>Edit Data Member</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="member_code">Kode Anggota / NPM</label>
            <input type="text" name="member_code" id="member_code" value="{{ old('member_code', $member->member_code) }}" required>
        </div>

        <div>
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" value="{{ old('name', $member->name) }}" required>
        </div>

        <div>
            <label for="phone">No. Telepon</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $member->phone) }}">
        </div>

        <div>
            <label for="address">Alamat</label>
            <textarea name="address" id="address" rows="2">{{ old('address', $member->address) }}</textarea>
        </div>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('members.index') }}">Kembali</a>
    </form>
@endsection