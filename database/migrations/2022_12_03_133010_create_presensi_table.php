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
            $table->integer('Total_Pertemuan');
        });

        Schema::create('ket_presensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Presensi_ID')->constrained('presensi')->nullable();
            $table->integer('Hadir')->nullable();
            $table->integer('Alpha')->nullable();
            $table->integer('Izin')->nullable();
            $table->integer('Sakit')->nullable();
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
