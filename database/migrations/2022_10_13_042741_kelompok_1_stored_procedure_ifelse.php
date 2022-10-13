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
        // Muchammad Saifurrijaal / 215150701111006
        $procedure_loop = "DROP PROCEDURE IF EXISTS `kelompok_1_ifelse_role_user`;
            CREATE PROCEDURE `kelompok_1_ifelse_role_user` (IN role enum('admin', 'teacher', 'student'))
            BEGIN
            DECLARE hasil VARCHAR(100);
                IF role = 'admin' THEN
                SET hasil = 'Kamu boleh mengelola SI OBE!';
                END IF;
                SELECT hasil;
            END;";
        \DB::unprepared($procedure_loop);

        $procedure_ifelse = "DROP PROCEDURE IF EXISTS `kelompok_1_ifelse_courses`;
            CREATE PROCEDURE `kelompok_1_ifelse_courses` (IN type enum('mandatory', 'elective'))
            BEGIN
            DECLARE hasil VARCHAR(100);
                IF type = 'mandatory' THEN
                SET hasil = 'MATA KULIAH INI WAJIB DIAMBIL';
                END IF;
                SELECT HASIL;
            END;";
        \DB::unprepared($procedure_ifelse);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
