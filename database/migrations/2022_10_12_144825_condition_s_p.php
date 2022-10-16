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
        //CONDITION PROCEDURE - Alvianta Dwi Putra - 215150700111053
        //condition untuk menampilkan perbandingan antara dosen dan mahasiswa
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok5_condition_compare_civitas`;
        CREATE PROCEDURE `kelompok5_condition_compare_civitas`()
        BEGIN
            DECLARE COUNT1 INT;
            DECLARE COUNT2 INT;
            set COUNT1 = (SELECT COUNT(*) FROM users us
            WHERE NOT EXISTS (SELECT* FROM student_info st WHERE us.id=st.id));
            set COUNT2 = (SELECT COUNT(*) FROM student_info);
            if (COUNT1)>(COUNT2) then
            SET @print ='Dosen lebih banyak dari Mahasiswa';
            elseif (COUNT1)<(COUNT2) then
            SET @print ='Mahasiswa lebih banyak dari Dosen';
            ELSE
            SET @print ='Jumlah dosen dan mahasiswa sama';
            END if;
            SET @tampil = CONCAT('Dosen: ', COUNT1, ' | ', ' Mahasiswa: ', COUNT2, ' | ', @print);
            SELECT @tampil;
        END;";
        DB::unprepared($procedure_create);


        //CONDITION PROCEDURE - Alifa Nurfika - 215150700111044
        //condition untuk menampilkan ketepatan waktu penugasan berdasarkan input pengecekan menggunakan id assignment
        $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok5_condition_pengumpulan`;
        CREATE PROCEDURE `kelompok5_condition_pengumpulan`(in input int)
        BEGIN
        DECLARE CASEa timestamp;
        declare CASEb timestamp;
        set CASEa = (select assigned_date from assignment where id=input);
        set CASEb = (select due_date from assignment where id=input);
        if CASEa>=CASEb then 
        SET @print = 'terdapat kesalahan pengaturan batas waktu';
        ELSE
        SET @print ='pengaturan waktu penugasan telah sesuai';
        END if;
        SELECT @print;
    END;";
    DB::unprepared($procedure_create);

        //CONDITION PROCEDURE - Nur Fathiyyah - 215150700111048
        //condition untuk menampilkan nama dan kode kelas
        $procedure_condition = "DROP PROCEDURE IF EXISTS `kelompok5_condition_namecode_class`;
        CREATE PROCEDURE `kelompok5_condition_namecode_class`()
        BEGIN

            SELECT course_class.name, course_class.class_code,
		    IF (join_class.course_class_id = 1, 'A', 'B') AS kelas FROM course_class
		    JOIN join_class ON course_class.id = join_class.course_class_id;

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
        Schema::dropIfExists('condition_s_p');
    }
};