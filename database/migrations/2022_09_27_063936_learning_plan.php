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
        Schema::create('learning_plan', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary;
            $table->unsignedBigInteger('llo_id')->foreign;
            $table->integer('week_number');
            $table->varchar('title',2048);
            $table->text('description');
            $table->varchar('estimated_time',1024);
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
        Schema::dropIfExists('learning_plan');
    }
};
