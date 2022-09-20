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
        Schema::create('login', function (Blueprint $table) {
            $table -> bigIncrement('ID_User') -> primary;
            $table -> string('Password');

            $table -> unsignedBigInteger('Mahasiswa_NIM')->nullable();
            $table -> foreign('Mahasiswa_NIM')->references('NIM')->on('mahasiswa');

            $table -> unsignedBigInteger('Dosen_Pengampu-NIP')->nullable();
            $table -> foreign('Dosen_Pengampu_NIP')->references('NIP')->on('dosen_pengampu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login');
    }
};
