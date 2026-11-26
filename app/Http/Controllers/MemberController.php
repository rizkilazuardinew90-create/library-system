<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $title = 'Daftar Anggota Perpustakaan';
        $members = Member::orderBy('name')->get();

        return view('members.index', compact('title', 'members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'member_code' => ['required', 'string', 'max:50', 'unique:members,member_code'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'address' => ['nullable', 'string'],
        ], [
            'member_code.unique' => 'NPM anggota sudah digunakan.',
            'name.required' => 'Nama anggota wajib diisi.',
        ], [
            'member_code' => 'kode anggota',
        ]);

        Member::create($validated);

        return redirect()
            ->route('members.index')
            ->with('success', 'Data anggota berhasil ditambahkan.');
    }

    public function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    public function edit(Member $member)
    {
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $validated = $request->validate([
            'member_code' => ['required', 'string', 'max:50', 'unique:members,member_code,' . $member->id],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'address' => ['nullable', 'string'],
        ], [
            'member_code.unique' => 'NPM anggota sudah digunakan.',
            'name.required' => 'Nama anggota wajib diisi.',
        ], [
            'member_code' => 'kode anggota',
        ]);

        $member->update($validated);

        return redirect()
            ->route('members.index')
            ->with('success', 'Data anggota berhasil diperbarui.');
    }

    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()
            ->route('members.index')
            ->with('success', 'Data anggota berhasil dihapus.');
    }
}