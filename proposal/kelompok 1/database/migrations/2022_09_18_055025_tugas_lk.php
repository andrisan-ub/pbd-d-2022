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
        Schema::create('tugas_lk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mahasiswa');
            $table->string('tipe_tugas');
            $table->double('nilai');
            $table->foreignId('id_cpl');
            $table->string('id_cpmk');
            $table->string('id_sub_cpmk');
            $table->timestamps();

            $table->foreign('tipe_tugas')->references('nama')->on('tipetugas');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswamatkul');
            // $table->foreign('id_cpl')->references('id')->on('cpl');
            $table->foreign('id_cpmk')->references('tipe_cpmk')->on('cpmk');
            $table->foreign('id_sub_cpmk')->references('tipe_sub_cpmk')->on('subcpmk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas_lk');
    }
};
