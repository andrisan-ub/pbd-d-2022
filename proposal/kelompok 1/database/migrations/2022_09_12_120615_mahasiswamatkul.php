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
        Schema::create('mahasiswamatkul', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->foreignId('id_matkul');
            $table->timestamps();

            $table->foreign('id_matkul')->references('id')->on('matakuliah');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswamatkul');
    }
};
