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
        Schema::create('crisis_center', function (Blueprint $table) {
            $table->id();
            $table->string('email')->constrained('users');
            $table->string('nama_lengkap')->constrained('users');
            $table->string('nim')->constrained('student_data');
            $table->string('program_studi')->constrained('study_programs');
            $table->string('no_hp');
            $table->string('topik');
            $table->text('keluhan');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crisis_center');
    }
};
