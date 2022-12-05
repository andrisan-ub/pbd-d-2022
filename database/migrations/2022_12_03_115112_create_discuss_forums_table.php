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
        Schema::create('discuss_forums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('creator_user_id')->constrained('users');
            $table->foreignId('course_id')->constrained('courses');
            $table->text('question');
            $table->boolean('is_answered')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discuss_forums');
    }
};
