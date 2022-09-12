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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->bigIncrements('NIM')->primary;
            $table->string('Nama_mahasiswa');
            $table->unsignedBigInteger('Dosen_NIP')->nullable();
            $table->foreign('Dosen_NIP')->references('NIP')->on('dosen');
        });
        
            

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
};
