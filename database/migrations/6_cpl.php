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
            $table->bigIncrements('ID_CPL')->primary;
            $table->string('Deskripsi_CPL');

            $table->unsignedBigInteger('Mata_Kuliah_ID_MK')->nullable();
            $table->foreign('Mata_Kuliah_ID_MK')->references('ID_MK')->on('mata_kuliah');
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
