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
        Schema::create('sub_cpmk', function (Blueprint $table) {
            $table->bigIncrements('Kode_Sub_CPMK')->primary;
	        $table->integer('Bobot_Sub_CPMK');
	        $table->integer('LK_1');
	        $table->integer('LK_2');
	        $table->integer('LK_3');
	        $table->integer('LK_4');
            $table->integer('UAS');
	        $table->integer('UTS');

	        $table->unsignedBigInteger('Penilaian_Kode_Penilaian')->nullable();
	        $table->foreign('Penilaian_Kode_Penilaian')->references('Kode_Penilaian')->on('penilaian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_cpmk');
    }
};
