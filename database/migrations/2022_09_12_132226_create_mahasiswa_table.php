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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('NIM');
            $table->foreignId('Mata_Kuliah_Kode_MK');
            $table->foreignId('Dosen_Pengampu_NIP');
            $table->string('Nama_Mahasiswa');
            $table->integer('Semester_MHS');

            $table->foreign('Mata_Kuliah_Kode_MK')->references('Kode')->on('Mata_Kuliah');
            $table->foreign('Dosen_Pengampu_NIP')->references('Kode')->on('Dosen_Pengampu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
