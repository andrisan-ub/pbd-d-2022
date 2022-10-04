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
        Schema::create('syllabus', function (Blueprint $table) {
            $table->UnsignedBigInteger('id')->notnull()->primary();
            $table->UnsignedBigInteger('course_id')->notnull();
            $table->string('name')->notnull();
            $table->text('author')->nullable();
            $table->string('head_of_study_program', 512)->nullable();

            $table->foreign('course_id')->refereces('id')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syllabus');
    }
};