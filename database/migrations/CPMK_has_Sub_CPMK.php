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
        Schema::create('CPMK_Sub_CPMK', function (Blueprint $table) {
            $table->string('ID_CPMK', 2);
            $table->string('ID_SUB_CPMK', 2);

            $table->foreign('ID_CPMK')->references('ID_CPMK')->on('CPMK');
            $table->foreign('ID_SUB_CPMK')->references('ID_SUB_CPMK')->on('SUB_CPMK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CPMK_Sub_CPMK');
    }
};