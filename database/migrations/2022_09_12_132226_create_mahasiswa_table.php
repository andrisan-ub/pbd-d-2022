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
            $table->string('nim');
            $table->foreignId('id_matkul');
            $table->foreignId('id_nip');
            $table->string('nama_mahasiswa');
            $table->integer('semester');

            $table->foreign('id_matkul')->references('id')->on('matakuliah');
            $table->foreign('id_nip')->references('id')->on('dosen');
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
