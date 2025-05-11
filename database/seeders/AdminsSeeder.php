<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\admins;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    public function run(): void
    {
        Admins::create([
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
