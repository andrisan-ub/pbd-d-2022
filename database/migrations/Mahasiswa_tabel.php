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
        Schema::create('Mahasiswa', function (Blueprint $table) {
            $table->char('NIM', 15)-> primary();
            $table->string('Nama');
            $table->enum('Jenis_Kelamin', array('L','P'));
            $table->date('Tahun_Masuk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mahasiswa');
    }
};
