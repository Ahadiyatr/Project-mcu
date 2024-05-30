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
        Schema::create('dt_karyawan', function (Blueprint $table) {
            $table->id();
            $table->integer('nik_karyawan');
            $table->string('nama_karyawan');
            $table->bigInteger('perusahaan_id');
            $table->bigInteger('departemen_id');
            $table->bigInteger('jabatan_id');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->date('tanggal_lhr');
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
        Schema::dropIfExists('dt_karyawan');
    }
};
