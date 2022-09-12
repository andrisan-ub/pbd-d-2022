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
        Schema::create('pengesahan', function (Blueprint $table) {
            $table->string('Dosen_Pengampu')->primary;
            $table->foreignId('Mata_Kuliah_Kode_MK');
            $table->foreignId('RPS_Kode_RPS');
            $table->string('Status_2');
            $table->string('KPS');
            $table->string('KKJFD');

            $table->foreign('Mata_Kuliah_Kode_MK')->references('Kode')->on('Mata_Kuliah');
            $table->foreign('RPS_Kode_RPS')->references('Kode')->on('RPS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengesahan');
    }
};
