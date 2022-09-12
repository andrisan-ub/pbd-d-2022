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
            $table->bigIncrements('NIM')->primary;
            $table->string('Nama_Mahasiswa');
            $table->integer('Semester_MHS');

            $table->unsignedBigInteger('Dosen_Pengampu_NIP')->nullable();
            $table->foreign('Dosen_Pengampu_NIP')->references('NIP')->on('dosen_pengampu');

            $table->unsignedBigInteger('Mata_Kuliah_Kode_MK')->nullable();
            $table->foreign('Mata_Kuliah_Kode_MK')->references('Kode_MK')->on('mata_kuliah');

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
