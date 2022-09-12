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
            $table->bigIncrements('NIM');
            $table->char('nama_Mahasiswa',50);
            $table->char('no_telp',15);
            $table->char('angkatan',5);
            $table->unsignedBigInteger('id_jurusan');

            $table->foreign('id_jurusan')->references('id')->on('jurusan');
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
        Schema::dropIfExists('mahasiswa');
    }
};
