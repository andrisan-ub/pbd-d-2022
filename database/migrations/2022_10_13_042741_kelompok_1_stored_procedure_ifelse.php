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

        // Rafli Ardiansyah / 215150701111030
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

        // Muchammad Saifurrijaal / 215150701111006
        $procedure_loop = "DROP PROCEDURE IF EXISTS `kelompok_1_loop_read_criterias`;
            CREATE PROCEDURE `kelompok_1_loop_read_criterias` (IN batas INT)
            BEGIN
            DECLARE i INT;
            DECLARE hasil VARCHAR(20) DEFAULT '';
            SET i = 1;
            ulang: LOOP
                IF i > batas THEN
                    LEAVE ulang;
                END IF;
                SET i = i + 1;
            END LOOP;
            SELECT id, title FROM criterias WHERE id < batas;
            END;";
        \DB::unprepared($procedure_loop);

            // Bagas Meganata / 215150701111004
            $procedure_ifelse = "DROP PROCEDURE IF EXISTS `kelompok_1_ifelse_departments`;
            CREATE PROCEDURE `kelompok_1_ifelse_departments` (IN id int)
            BEGIN
            DECLARE hasil VARCHAR(255);
                    IF departments.faculty_id = 1 THEN
                    SET hasil = 'Kamu harus mempunyai laptop';
                END IF;
            SELECT hasil;
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
