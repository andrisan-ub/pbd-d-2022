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
        Schema::create('subcpmk', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_sub_cpmk');
            $table->text('description');
            $table->foreignId('id_cpmk');
            $table->timestamps();

            $table->foreign('id_cpmk')->references('id')->on('cpmk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcpmk');
    }
};
