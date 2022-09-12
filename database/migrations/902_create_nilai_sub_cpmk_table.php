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
        Schema::create('nilai_sub_cpmk', function (Blueprint $table) {
            $table->bigIncrements('ID_Nilai')->primary;
            $table->double('Nilai_Sub_CPMK');

            $table->unsignedBigInteger('Lembar_Kerja_ID_Lembar_Kerja')->nullable();
            $table->foreign('Lembar_Kerja_ID_Lembar_Kerja')->references('ID_Lembar_Kerja')->on('lembar_kerja');

            $table->unsignedBigInteger('Lembar_Kerja_Sub_CPMK_ID_Sub_CPMK')->nullable();
            $table->foreign('Lembar_Kerja_Sub_CPMK_ID_Sub_CPMK')->references('Sub_CPMK')->on('sub_cpmk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilai_sub_cpmk');
    }
};
