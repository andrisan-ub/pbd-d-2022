<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        //CONDITION PROCEDURE - Aulia Septy Anggraini - 215150701111045
        //Seleksi Kondisi untuk menampilkan kelulusan nilai akhir
        $procedure_condition = "DROP PROCEDURE IF EXISTS `kelompok3_condition_final_score`;
        CREATE PROCEDURE `kelompok3_condition_final_score`()
        BEGIN
        DECLARE nilai_akhir INT;
        DECLARE max_point INT;
        DECLARE keterangan VARCHAR(20);
        SELECT SUM(point) INTO nilai_akhir FROM criteria_levels WHERE NOT EXISTS (SELECT* FROM student_grades  WHERE criteria_levels.id=student_grades.id);
        SELECT COUNT(max_point) INTO max_point FROM criterias;
            if (NILAI_AKHIR)>=(MAX_POINT) THEN
               SET keterangan ='LULUS';
            ELSE
               SET keterangan ='TIDAK LULUS';
            END if;
            SELECT keterangan;
        END;";
        DB::unprepared($procedure_condition);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condition_final_score');
    }
};
