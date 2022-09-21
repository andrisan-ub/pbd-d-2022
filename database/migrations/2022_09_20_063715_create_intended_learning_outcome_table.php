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
        Schema::create('intended_learning_outcome', function (Blueprint $table) {
            $table->UnsignedBigInteger('ID_ILO')->notnull()->primary;
            $table->Integer('POSITION');
            $table->text('DESCRIPTION');

            // $table->UnsignedBigInteger('syllabus_id')->notnull();
            // $table->foreign('syllabus_id')->references('id')->on('syllabus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intended_learning_outcome');
    }
};
