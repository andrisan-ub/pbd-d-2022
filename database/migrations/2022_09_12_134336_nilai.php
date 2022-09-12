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
        Schema::create('nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nilai_keaktifan',5);
            $table->char('nilai_pratikum',5);
            $table->char('nilai_uas',5);
            $table->char('nilai_uts',5);
            $table->char('nilai_tugas',5);
            
            $table->unsignedBigInteger('NIP');
            $table->foreign('NIP')->references('NIP')->on('Dosen');

            $table->unsignedBigInteger('NIM');
            $table->foreign('NIM')->references('NIM')->on('Mahasiswa');
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
        Schema::dropIfExists('nilai');
    }
};
