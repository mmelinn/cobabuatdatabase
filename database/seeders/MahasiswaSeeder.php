<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //insert data ke tabel mahasiswa
        DB::table('mahasiswa')->insert([
            'id_mhs' => '1',
            'nama_mhs'=> 'Melinda Naurah',
            'alamat' => 'Jember',
            'ttl' => '2004-05-10',
            'status' => 'aktif'
        ]);

    }
}
