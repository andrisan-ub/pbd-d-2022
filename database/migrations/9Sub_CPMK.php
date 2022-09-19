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
            $table->integer('ID_SUB_CPMK')-> primary();
            $table->string('Desc', 255);
            $table->integer('CPMK_ID_CPMK');

            $table->foreign('CPMK_ID_CPMK')-> references ('ID_CPMK')-> on ('CPMK');
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
