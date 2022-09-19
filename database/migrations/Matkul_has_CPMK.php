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
        Schema::create('Matkul_CPMK', function (Blueprint $table) {
            $table->integer('ID_Prodi');
            $table->char('Dosen_NIP',20);
            $table->integer('ID_MK');
            $table->string('ID_CPMK');
           
            $table->foreign('ID_Prodi')->references('ID_Prodi')->on('mata_kuliah');
            $table->foreign('Dosen_NIP')->references('Dosen_NIP')->on('mata_kuliah');
            $table->foreign('ID_MK')->references('ID_MK')->on('mata_kuliah');
            $table->foreign('ID_CPMK')-> references ('ID_CPMK') -> on ('cpmk');         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Matkul_CPMK');
    }
};
