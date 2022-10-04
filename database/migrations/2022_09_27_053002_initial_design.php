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
        Schema::create('faculty', function (Blueprint $table) {
            $table->id()->unsigned;
            $table->string('name')->nullable();
            $table->timestamps();
        });

        Schema::create('study_program', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('faculty_id'); 
            $table->string('name');
            $table->timestamps();

            $table->foreign('faculty_id')->references('id')->on('faculty');

        });

        Schema::create('course', function (Blueprint $table){
            $table->id();
            $table->bigIncrements('study_program_id');
            $table->bigIncrements('creator_user_id');
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

            $table->foreign('study_program_id')->references('id')->on('study_program');
            $table->foreign('creator_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
