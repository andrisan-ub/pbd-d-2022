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
        Schema::create('course', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned;
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->integer('course_credit')->nullable();
            $table->integer('lab_credit')->nullable();
            $table->enum('type', array('mandatory', 'elective'))->nullable();
            $table->text('short_description')->nullable();
            $table->string('minimal_requirement', 1024)->nullable();
            $table->text('study_material_summary')->nullable();
            $table->text('learning_media')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
};
