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
        Schema::create('penilaian', function (Blueprint $table) {
            $table->bigIncrements('Kode_Penilaian')->primary;
            $table->string('Predikat');
            $table->integer('Nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian');
        $table->bigIncrements('Kode_Penilaian')->primary;
        $table->string('Predikat');
        $table->integer('Nilai');
    }
};
