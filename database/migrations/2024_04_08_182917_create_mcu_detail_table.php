<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcu_detail', function (Blueprint $table) {
            $table->id();
            $table->char('no_mcu');
            $table->string('nama_karyawan');
            $table->integer('nik_karyawan');
            $table->enum('perusahaan',['PT. PPA', 'PT. AMM']);
            $table->enum('departemen',['Produksi', 'Plant', 'HCGA', 'PPA Academy', 'COE', 'SHE', 'Engeenering', 'FA & Logistik']);
            // $table->char('jabatan');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->string('tempat_mcu');
            $table->enum('status_mcu',['Calon Karyawan','Mutasi', 'Annual']);
            $table->date('tanggal_mcu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mcu_detail');
    }
};
