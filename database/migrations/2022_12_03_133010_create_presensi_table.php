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
        Schema::create('presensi', function (Blueprint $table) {
            $table->bigIncrements('ID_Presensi')->primary;
            $table->string('Nama_Mahasiswa');
            $table->unsignedBigInteger('NIM')->nullable();
            $table->unsignedBigInteger('ID_Class')->nullable();
            $table->string('Class');
            $table->timestamp('Waktu_Kehadiran');
            $table->integer('Hadir');
            $table->integer('Alpha');
            $table->integer('Izin');
            $table->integer('Sakit');
            $table->integer('Total_Pertemuan');
            $table->double('Presentase');
            $table->foreign('NIM')->references('id')->on('users');
            $table->foreign('ID_Class')->references('id')->on('course_classes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
};
