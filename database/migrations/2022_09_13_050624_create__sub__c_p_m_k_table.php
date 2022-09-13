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
            $table->bigIncrements('ID_SUB_CPMK')->primary;
            $table->unsignedBigInteger('CPMK_ID_CPMK');
            $table->foreign('CPMK_ID_CPMK')->references('ID_CPMK')->on('cpmk'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sub__c_p_m_k');
    }
};
