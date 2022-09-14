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
            $table->unsignedBigInteger('Mata_Kuliah_Kode_MK')->nullable();
            $table->unsignedBigInteger('RPS_Kode_RPS')->nullable();
            $table->string('Status_2');
            $table->string('KPS');
            $table->string('KKJFD');

            $table->foreign('Mata_Kuliah_Kode_MK')->references('Kode_MK')->on('mata_kuliah');
            $table->foreign('RPS_Kode_RPS')->references('Kode_RPS')->on('rps');
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
