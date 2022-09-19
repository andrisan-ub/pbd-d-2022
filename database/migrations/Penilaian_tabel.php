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
        Schema::create('Penilaian', function (Blueprint $table) {
            $table->integer('ID_Penilaian')-> primary();
            $table->string('Nama_Penilaian', 10);
            $table->string('ID_SUB_CPMK');
            $table->double('Bobot');
           
            $table->foreign('ID_SUB_CPMK')->references('ID_sub_CPMK')->on('sub_cpmk');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Penilaian');
    }
};
