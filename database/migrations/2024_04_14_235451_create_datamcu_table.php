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
        Schema::create('datamcu', function (Blueprint $table) {
            $table->id();
            $table->char('no_mcu');
            $table->string('nama_karyawan');
            $table->integer('nik_karyawan');
            $table->enum('perusahaan',['PT. PPA', 'PT. AMM']);
            $table->enum('departemen',['Produksi', 'Plant', 'HCGA', 'PPA Academy', 'COE', 'SHE', 'Engeenering', 'FA & Logistik']);
            $table->bigInteger('departemen_id');
            $table->bigInteger('jabatan_id');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->integer('umur');
            $table->string('tempat_mcu');
            $table->enum('status_mcu',['Calon Karyawan','Mutasi', 'Annual']);
            $table->date('tanggal_mcu');
            // P.umum
            $table->integer('sistole');
            $table->integer('diastole');
            $table->integer('nadi');
            $table->integer('tb');
            $table->integer('bb');
            $table->decimal('bmi');
            // P.Lab
            $table->decimal('hb');
            $table->integer('cl');
            $table->integer('trig');
            $table->integer('gdp');
            $table->decimal('au');
            $table->integer('ur');
            $table->decimal('cre');
            $table->integer('sgot');
            $table->integer('sgpt');
            $table->text('ablab');
            $table->enum('hbsag',['Non Reaktif','Reaktif']);
            $table->enum('antihbs',['Non Reaktif','Reaktif']);
            $table->enum('urin',['Normal','Abnormal','Bronchitis']);
            $table->text('urin_t');
            $table->text('narkoba');
                // P.Fisik
            $table->enum('mata',['Normal','Miopia','Ptregium','Katarak','Strabismus']);
            $table->enum('gigimulut',['Normal','Cariess','Gigi Berlubang','Cariess dan Gigi Berlubang']);
            $table->enum('hemoroid',['Grade 1','Grade 2','Grade 3','Menolak RT']);
            $table->text('ablain');
                //  P.Penunjang
            $table->enum('spiro_o',['Normal','Ringan','Sedang','Berat']);
            $table->enum('spiro_r',['Normal','Ringan','Sedang','Berat']);
            $table->enum('audi_kanan',['Normal','Gangguan Pendengaran Ringan','Gangguan Pendengaran Sedang','Ganggun Pendengaran Berat']);
            $table->enum('audi_kiri',['Normal','Gangguan Pendengaran Ringan','Gangguan Pendengaran Sedang','Ganggun Pendengaran Berat']);
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
        Schema::dropIfExists('datamcu');
    }
};
