<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat satu user spesifik dengan hash password
        User::create([
            'name' => 'Admin',
            'email' => 'admin@booking.com',
            'password' => Hash::make('Rahasia123#'), // Hashing password
            'role' => 'admin',
        ]);
    }
}
