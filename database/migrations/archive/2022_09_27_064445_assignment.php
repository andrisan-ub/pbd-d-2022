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
        Schema::create('assignment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('llo_id')->notnull();
            $table->text('objective')->nullable();
            $table->string('title', 2048)->nullable();
            $table->boolean('is_group_assigment')->nullable();
            $table->string('assignment_style', 1024)->nullable();
            $table->text('description')->nullable();
            $table->text('output_instruction')->nullable();
            $table->text('submission_instruction')->nullable();
            $table->text('deadline_instruction')->nullable();
            $table->unsignedBigInteger('class_id')->notnull();
            $table->integer('created_at')->notnull();
            $table->integer('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignment');
    }
};
