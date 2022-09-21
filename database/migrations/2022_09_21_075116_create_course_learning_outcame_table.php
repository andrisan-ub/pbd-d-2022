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
        Schema::create('course_learning_outcame', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->timestamps();
            $table->foreignId('syllabus_id')->nullable();
            $table->foreign('syllabus_id')->references('id')->on('syllabus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_learning_outcame');
    }
};
