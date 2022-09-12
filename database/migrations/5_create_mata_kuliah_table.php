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
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->bigIncrements('ID_MK');
            $table->string('Nama_MK');
            $table->string('Kode_MK');
            $table->integer('Jumlah_SKS');
            $table->year('Thn_MK');
            $table->boolean('IsWajib');
            $table->unsignedBigInteger('Mahasiswa_NIM')->nullable();
            $table->foreign('Mahasiswa_NIM')->references('NIM')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
