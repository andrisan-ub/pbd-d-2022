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
        //condition untuk menampilkan p


        //CONDITION PROCEDURE - Nur Fathiyyah - 215150700111048
        //condition untuk menampilkan 
        
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