<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dt_karyawan')->insert([
            'nik_karyawab' => '22040441',
            'nama_karyawan' => 'Muhammad Aziz Alamysah',
            // 'perusahaan' => '0',
            // 'departemen' => '0',
            // 'jabatan' => '0',
            'tanggal_lhr' => '2024-4-11',
            'jenis_kelamin' => 'Laki-laki',
        ]);
    }
}
