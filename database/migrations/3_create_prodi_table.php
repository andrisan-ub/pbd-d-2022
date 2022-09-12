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
        Schema::create('prodi', function (Blueprint $table) {
            $table->bigIncrements('ID_Prodi')->primary;
            $table->string('Nama_Prodi');
            $table->string('Jenjang');

            $table->unsignedBigInteger('Jurusan_ID_Jurusan')->nullable();
            $table->foreign('Jurusan_ID_Jurusan')->references('ID_Jurusan')->on('jurusan');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodi');
    }
};