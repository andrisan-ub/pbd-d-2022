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
            
            $table->bigIncrements('sub_cpmk')->primary;
            $table->string('Deskripsi_Sub_CPMK');
            
            $table->string('CPMK_ID_CPMK')->nullable();
            $table->foreign('CPMK_ID_CPMK')->references('ID_CPMK')->on('cpmk');

            $table->string('CPMK_CPL_ID_CPL')->nullable();
            $table->foreign('CPMK_CPL_ID_CPL')->references('ID_CPL')->on('cpl');

            $table->string('CPMK_CPL_MATA_KULIAH_ID_MK')->nullable();
            $table->foreign('CPMK_CPL_MATA_KULIAH_ID_MK')->references('ID_MK')->  on('mata_kuliah');


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
