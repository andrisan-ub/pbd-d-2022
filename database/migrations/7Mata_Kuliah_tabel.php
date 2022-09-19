<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::dropIfExists('mata_kuliah');
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mata_Kuliah', function (Blueprint $table) {
            $table->integer('ID_MK')-> primary();
            $table->char('Dosen_NIP', 20);
            $table->integer('ID_Prodi');
            $table->string('Nama_MK', 45);
            
            $table->foreign('Dosen_NIP')-> references ('NIP')-> on ('dosen');
            $table->foreign('ID_Prodi')-> references ('ID_Prodi')-> on ('prodi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mata_Kuliah');
    }
};
