<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'npm' => 12345678,
            'username' => 'opik',
            'first_name' => 'ridwan',
            'last_name' => 'taufik',
            'email' => 'ridwantaufik@gmail.com',
            'password' => Hash::make('ridwan123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}