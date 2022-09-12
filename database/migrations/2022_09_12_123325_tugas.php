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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mahasiswa');
            $table->string('tipe_tugas');
            $table->double('nilai');
            $table->timestamps();

            $table->foreign('tipe_tugas')->references('nama')->on('tipetugas');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswamatkul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas');
    }
};
