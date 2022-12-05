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
          $table->foreignId('user_id')->constrained('users');
          $table->foreignId('course_class_id')->constrained('course_classes');
          $table->foreignId('question_id')->constrained('questions');
          $table->foreignId('satisfaction_id')->constrained('satisfactions');
          $table->timestamp('submitted_at')->nullable();
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
    }
};
