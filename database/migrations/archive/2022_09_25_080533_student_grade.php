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
        Schema::create('student_grade', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary;
            $table->unsignedBigInteger('user_id')->foreign;
            $table->unsignedBigInteger('assignment_id')->foreign;
            $table->unsignedBigInteger('criterion_level_id')->foreign;
            $table->unsignedBigInteger('criterion_id')->foreign;
            $table->integer('created_at');
            $table->integer('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_grade');
    }
};
