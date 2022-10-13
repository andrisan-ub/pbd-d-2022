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
        $procedure_loop = "DROP PROCEDURE IF EXISTS `kelompok_1_loop_user`;
        CREATE PROCEDURE `kelompok_1_loop_user` (IN batas INT)
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
        SELECT name, id FROM users WHERE id < batas;
        END;";
        \DB::unprepared($procedure_loop);

        // Muchammad Saifurrijaal / 215150701111006
        $procedure_loop = "DROP PROCEDURE IF EXISTS `kelompok_1_loop_user_delete`;
        CREATE PROCEDURE `kelompok_1_loop_user_delete` (IN mulai INT, IN batas INT)
        BEGIN
        DECLARE i INT;
        DECLARE hasil VARCHAR(20) DEFAULT '';
        SET i = mulai;
        ulang: LOOP
            IF i > batas THEN
                LEAVE ulang;
            END IF;
            SET i = i + 1;
            DELETE FROM users WHERE id = batas;
        END LOOP;
        END;";
        \DB::unprepared($procedure_loop);

        // Muchammad Saifurrijaal / 215150701111006
        $procedure_loop = "DROP PROCEDURE IF EXISTS `kelompok_1_loop_read_rubric`;
        CREATE PROCEDURE `kelompok_1_loop_read_rubric` (IN batas INT)
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
        SELECT id, title FROM rubrics WHERE id < batas;
        END;";
        \DB::unprepared($procedure_loop);

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
