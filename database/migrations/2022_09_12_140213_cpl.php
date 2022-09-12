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
            $table->bigIncrements('Kode_CPL')->primary;
            
            $table->string('Keterangan_CPL');

            $table->unsignedBigInteger('Mata_Kuliah_Kode_MK')->nullable();
            $table->foreignId('Mata_Kuliah_Kode_MK')->references('Kode_MK')->on('mata_kuliah');



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
