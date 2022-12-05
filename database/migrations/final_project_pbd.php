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
        // Schema::create ('student_info', function (Blueprint $table){
        //     $table->foreignId('id')->primary()->constrained('users');
        //     $table->string('student_id_number')->nullable();
        // });

        // Schema::create('faculty', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name')->nullable();
        // });
        
        Schema::create ('questions', function (Blueprint $table){
          $table->id();
          $table->string('question');
        });

        Schema::create ('satisfactions', function (Blueprint $table){
          $table->id();
          $table->integer('point')->nullable();
          $table->string('description')->nullable();
        });

        Schema::create ('user_answers', function (Blueprint $table){
          $table->id();
          $table->foreignId('users_id')->constrained('users');
          $table->foreignId('course_classes_id')->constrained('course_classes');
          $table->foreignId('questions_id')->constrained('questions');
          $table->foreignId('satisfactions_id')->constrained('satisfactions');
          $table->timestamp('created_at')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_answers');
        Schema::dropIfExists('satisfactions');
        Schema::dropIfExists('questions');
        // Schema::dropIfExists('faculty');
        // Schema::dropIfExists('student_info');
    }
};
