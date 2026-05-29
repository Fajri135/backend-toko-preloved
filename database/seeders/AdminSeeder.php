<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder {
    public function run(): void {
        Admin::create([
            'nama' => 'Admin Toko Preloved',
            'email' => 'admin@toko.com',
            'password' => Hash::make('password123'),
            'no_wa' => '6281234567890', // WAJIB diawali 62 agar link WA berfungsi
        ]);
    }
}
