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
        Schema::create('Mata_Kuliah', function (Blueprint $table) {
            $table->varchar('Kode_MK')->primary;
            $table->varchar('Jumlah_SKS');
            $table->integer('Jumlah_SKS');
            $table->varchar('Materi_Pembelajaran');
            $table->time('Estimasi_Waktu');
            $table->year('Kurikulum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mata_Kuliah');
    }
};
