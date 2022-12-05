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
            $table->id();
            $table->string('Nama_Mahasiswa');
            $table->foreignId('NIM')->constrained('users');
            $table->foreignId('ID_Class')->constrained('course_classes');
            $table->string('Class');
            $table->timestamp('Waktu_Kehadiran');
            $table->integer('Hadir');
            $table->integer('Alpha');
            $table->integer('Izin');
            $table->integer('Sakit');
            $table->integer('Total_Pertemuan');
            $table->double('Presentase');
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
