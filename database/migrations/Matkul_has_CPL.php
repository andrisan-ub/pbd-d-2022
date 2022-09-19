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
        Schema::create('Matkul_CPL', function (Blueprint $table) {
            $table->integer('ID_Prodi');
            $table->char('Dosen_NIP', 20);
            $table->integer('ID_MK');
            $table->string('ID_CPL', 10);

            $table->foreign('ID_Prodi')-> references ('ID_Prodi')-> on ('Mata_Kuliah');
            $table->foreign('Dosen_NIP')-> references ('Dosen_NIP')-> on ('Mata_Kuliah');
            $table->foreign('ID_MK')-> references ('ID_MK')-> on ('Mata_Kuliah');
            $table->foreign('ID_CPL')-> references ('ID_CPL')-> on ('CPL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Matkul_CPL');
    }
};