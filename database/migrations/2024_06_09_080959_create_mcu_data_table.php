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
        Schema::create('mcu_data', function (Blueprint $table) {
            $table->id();
            // $table->char('no_mcu');
            $table->unsignedBigInteger('karyawan_id'); // Foreign key field
            $table->foreign('karyawan_id')->references('id')->on('karyawan'); // Define foreign key constraint
            // //  MCU
            $table->unsignedBigInteger('tmptmcu_id'); // Foreign key field
            $table->foreign('tmptmcu_id')->references('id')->on('tmptmcu'); // Define foreign key constraint

            $table->date('tanggal_mcu');
            // P.umum
            $table->integer('sistole');
            $table->integer('diastole');
            $table->integer('nadi');
            $table->integer('tb');
            $table->integer('bb');
            $table->decimal('bmi');
            // P.Lab
            $table->float('hb'); //float
            $table->integer('cl');
            $table->integer('trig');
            $table->integer('gdp');
            $table->float('au'); //float
            $table->integer('ur');
            $table->float('cre'); //float
            $table->integer('sgot');
            $table->integer('sgpt');
            $table->string('ablab')->nullable(); // Abnormal lab
            $table->enum('hbsag',['Non Reaktif','Reaktif']);
            $table->enum('antihbs',['Non Reaktif','Reaktif']);
            $table->enum('urin',['Normal','Abnormal','Bronchitis']);
            $table->string('urin_t')->nullable(); // Temuan Urin - String
            $table->enum('narkoba',['Negatif','Positif']);

                // RO THOTAX
            // $table->enum('rotgen',['Normal','Abnormal','Bronchitis']);
            // $table->string('rotgen_temuan')->nullable(); // Temuan Rotgen

            // EKG
            // $table->enum('ekg',['Normal','Abnormal','Bronchitis']);
            // $table->string('ekg')->nullable(); // Temuan Ekg

                // P.Fisik
            // $table->enum('mata',['Normal','Miopia','Ptregium','Katarak','Strabismus']);
            // // $table->string('gradevisus')->nullable();
            // $table->enum('gigimulut',['Normal','Cariess','Gigi Berlubang','Cariess dan Gigi Berlubang']);
            // // $table->enum('telinga',['Normal','Abnormal','Bronchitis']);
            // $table->enum('hemoroid',['Grade 1','Grade 2','Grade 3','Menolak RT']);
            // $table->text('ablain')->nullable(); // Abnormal lain - String
            //     //  P.Penunjang
            // $table->enum('spiro_o',['Normal','Ringan','Sedang','Berat']);
            // $table->enum('spiro_r',['Normal','Ringan','Sedang','Berat']);
            // $table->enum('audi_kanan',['Normal','Gangguan Pendengaran Ringan','Gangguan Pendengaran Sedang','Ganggun Pendengaran Berat']);
            // $table->enum('audi_kiri',['Normal','Gangguan Pendengaran Ringan','Gangguan Pendengaran Sedang','Ganggun Pendengaran Berat']);
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
        Schema::dropIfExists('mcu_data');
    }
};
