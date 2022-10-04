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
        Schema::create('dosenmatkul', function (Blueprint $table) {
            $table->id();
            $table->string('nidn');
            $table->foreignID('id_matkul');
            $table->timestamps();

            $table->foreign('nidn')->references('nidn')->on('dosen');
            $table->foreign('id_matkul')->references('id')->on('matakuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dosenmatkul');
    }
};
