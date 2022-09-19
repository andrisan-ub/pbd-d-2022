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
        Schema::create('Mahasiswa', function (Blueprint $table) {
            
            $table->char('NIM', 15)-> primary();
            $table->string('Nama', 45);
            $table->enum('Jenis_Kelamin', array('L','P'));
            $table->year('Tahun_Masuk');
            $table->integer('Prodi_ID_Prodi');
            $table->integer('Matkul_ID_Prodi');
            $table->char('Matkul_Dosen_NIP',20);
            $table->integer('Matkul_ID_MK');

            $table->foreign('Prodi_ID_Prodi')-> references ('ID_Prodi')-> on ('prodi');
            $table->foreign('Matkul_ID_Prodi')-> references ('ID_Prodi')-> on ('mata_kuliah');
            $table->foreign('Matkul_Dosen_NIP')-> references ('Dosen_NIP')-> on ('mata_kuliah');
            $table->foreign('Matkul_ID_MK')-> references ('ID_MK')-> on ('mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Mahasiswa');
    }
};
