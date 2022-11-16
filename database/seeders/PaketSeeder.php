<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            'nama_paket' => 'Paket Basic',
            'harga' => '50.000',
            'keterangan' => 'Paket ini aktif selama 1 bulan',
        ]);
        DB::table('paket')->insert([
            'nama_paket' => 'Paket Middle',
            'harga' => '130.000',
            'keterangan' => 'Paket ini aktif selama 3 bulan',
        ]);

        DB::table('paket')->insert([
            'nama_paket' => 'Paket Advance',
            'harga' => '250.000',
            'keterangan' => 'Paket ini aktif selama 6 bulan',
        ]);
    }
}