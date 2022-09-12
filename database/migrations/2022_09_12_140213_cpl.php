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
        Schema::create('cpl', function (Blueprint $table) {
            $table->integer('Kode_CPL');
            $table->foreignId('Mata_Kuliah_Kode_MK');
            $table->string('Keterangan_CPL');

            $table->foreignId('Mata_Kuliah_Kode_MK')->references('Kode')->on('Mata_Kuliah');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cpl');
    }
};
