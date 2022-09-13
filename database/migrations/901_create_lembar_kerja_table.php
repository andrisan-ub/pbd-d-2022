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
        Schema::create('lembar_kerja', function (Blueprint $table) {
            $table->bigIncrements('ID_Lembar_Kerja')->primary;
            $table->unsignedBigInteger('Sub_CPMK_ID_Sub_CPMK')->nullable();
            $table->foreign('Sub_CPMK_ID_Sub_CPMK')->references('sub_cpmk')->on('sub_cpmk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lembar_kerja');
    }
};
