<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Yasa',
            'email' => 'yasamaulana1@gmail.com',
            'password' => Hash::make('yasa12'),
            'role' => 'guest',
            'paket' => 'Belum membeli paket',
        ]);
        DB::table('users')->insert([
            'nama' => 'Admin Web',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('yasa12'),
            'role' => 'admin',
            'paket' => 'Belum membeli paket',
        ]);
    }
}