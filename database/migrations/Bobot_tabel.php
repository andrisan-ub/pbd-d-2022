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
        Schema::create('Bobot', function (Blueprint $table) {
            $table->double('Penilaian_ID_Penilaian');
            // $table->foreign('Penilaian_ID_Penilaian')->references('ID_Penilaian')->on('Penilaian');
            // $table->unsignedBigInteger('Penilaian_Sub_CPMK_ID_SUB_CPMK');
            // $table->foreign('Penilaian_Sub_CPMK_ID_SUB_CPMK')->references('ID_SUB_CPMK')->on('sub_cpmk');
            // $table->unsignedBigInteger('Penilaian_Sub_CPMK_CPMK_ID_CPMK');
            // $table->foreign('Penilaian_Sub_CPMK_CPMK_ID_CPMK')->references('ID_CPMK')->on('CPMK');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bobot');
    }
};