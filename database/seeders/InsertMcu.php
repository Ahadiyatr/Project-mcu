<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InsertMcu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mcu_detail')->insert([
            'no_mcu' => 'A-001',
            'nama_karyawan' => 'Bambang P',
            'nik_karyawan' => '1111111',
            'perusahaan' => 'PT. PPA',
            'departemen' => 'Produksi',
            'jabatan' => 'Welder',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_mcu' => 'Klinik Safira',
            'status_mcu' => 'Annual',
            'tanggal_mcu' => '2024-4-11',
        ]);
    }
}
