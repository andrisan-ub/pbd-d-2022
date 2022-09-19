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
        Schema::create('Lembar_Kerja', function (Blueprint $table) {
            $table->string('ID_LK',4)->primary();
            $table->double('Bobot');
            $table->string('ID_SUB_CPMK');
            $table->string('ID_CPMK');
            $table->integer('ID_Penilaian');
            $table->string('ID_SUB_LK');
            $table->string('ID_Indikator');
            
            $table->foreign('ID_SUB_CPMK')->references('ID_SUB_CPMK')->on('penilaian');
            $table->foreign('ID_CPMK')->references('ID_CPMK')->on('penilaian');
            $table->foreign('ID_Penilaian')->references('ID_Penilaian')->on('penilaian');
            $table->foreign('ID_SUB_LK')->references('ID_Sub_LK')->on('subtugas_lk');
            $table->foreign('ID_Indikator')->references('ID_Indikator')->on('indikator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lembar_Kerja');
    }
};