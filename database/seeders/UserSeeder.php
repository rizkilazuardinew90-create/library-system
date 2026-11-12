<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //akun admin
        User::updateOrCreate([
            'email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ]
        );

        //akun petugas
        User::updateOrCreate([
            'email' => 'petugas@example.com'],
            [
                'name' => 'Petugas',
                'password' => Hash::make('password'),
                'role' => 'petugas'
            ]
        );
    }
}
