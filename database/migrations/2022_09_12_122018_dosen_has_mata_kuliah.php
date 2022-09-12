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
        Schema::create('dosen_has_mata_kuliah', function (Blueprint $table) {
            $table->unsignedBigInteger('NIP');

            $table->foreign('NIP')->references('NIP')->on('Dosen');

            $table->unsignedBigInteger('kode_MK');

            $table->foreign('kode_MK')->references('kode')->on('mata_kuliah');
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
        Schema::dropIfExists('dosen_has_mata_kuliah');
    }
};
