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
        Schema::create('study_program', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('faculty_id'); 
            $table->string('name');
            $table->timestamps();

            $table->foreign('faculty_id')->refereces('id')->on('faculty');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_program');
    }
};
