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
        Schema::create('Sub_CPMK', function (Blueprint $table) {
            $table->int('ID_SUB_CPMK')->primary;
            $table->string('Desc');
           // $table->int('FK_ID_CPMK');
            //$table->foreign('FK_ID_CPMK')->references('ID_CPMK')->on('CPMK'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sub_CPMK');
    }
};
