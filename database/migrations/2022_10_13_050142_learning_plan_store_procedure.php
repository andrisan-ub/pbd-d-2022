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
        // procedure read - Muhammad Yusuf Alhafiz - 215150707111022
        $get_procedure = "DROP PROCEDURE IF EXISTS `get_learning_plan_by_id`;
        CREATE PROCEDURE `get_learning_plan_by_id` (IN id_learn_pln int)

        BEGIN
        SELECT * FROM learning_plan WHERE id = id_learn_pln;
        END;

        ";

        \DB::unprepared($get_procedure);

        //create procedure - Muhammad Yusuf Alhafiz - 215150707111022
        $create_procedure = "DROP PROCEDURE IF EXISTS `create_learning_plan_by_id`;
           CREATE PROCEDURE `create_learning_plan_by_id` (
               id_learn_pln int,
               syll_id int,
               week_no int,
               lesson_outcome_id int,
               std_material varchar(1024),
               learning_mtd varchar(1024),
               est_time varchar(1024),
               new_created_at int,
               new_updated_at int )

           BEGIN
           INSERT INTO learning_plan(
               id, syllabus_id, week_number, llo_id, study_material, learning_method, estimated_time, created_at, updated_at)
           VALUES(
               id_learn_pln, syll_id, week_no, lesson_outcome_id, std_material, learning_mtd, est_time, new_created_at, new_updated_at);
           END;
           
           ";

        \DB::unprepared($create_procedure);

        //update procedure - Marcelino Kelvin - 215150707111026
        $update_procedure = "DROP PROCEDURE IF EXISTS `update_learning_plan_by_id`;
        CREATE PROCEDURE `update_learning_plan_by_id` (
            IN id_learn_pln int,
            IN new_week_no int,
            IN new_std_material varchar(1024),
            IN new_learning_mtd varchar(1024),
            IN new_est_time varchar(1024),
            IN new_created_at int,
            IN new_updated_at int )
        BEGIN
        UPDATE learning_plan SET week_number = new_week_no WHERE id = id_learn_pln;
        UPDATE learning_plan SET study_material = new_std_material WHERE id = id_learn_pln;
        UPDATE learning_plan SET learning_method = new_learning_mtd WHERE id = id_learn_pln;
        UPDATE learning_plan SET estimated_time = new_est_time WHERE id = id_learn_pln;
        UPDATE learning_plan SET created_at = new_created_at WHERE id = id_learn_pln;
        UPDATE learning_plan SET updated_at = new_updated_at WHERE id = id_learn_pln;
        END;";

    \DB::unprepared($update_procedure);

    
    //procedure delete - Tanziil Aziizil Ali - 215150707111028
    $delete_procedure = "DROP PROCEDURE IF EXISTS `delete_learning_plan_by_id`;
        CREATE PROCEDURE `delete_learning_plan_by_id` (id_learn_pln int)
        BEGIN
        DELETE FROM learning_plan
        WHERE id = id_learn_pln int;
        END;
        
        ";

    \DB::unprepared($delete_procedure);


    //IF ELSE get learning plan condition - Ahmad Fauzi - 215150700111037
    $ifelse_procedure = "DROP PROCEDURE IF EXISTS `get_learning_plan_conditions`;
        CREATE PROCEDURE `get_learning_plan_conditions` (IN id int)

        BEGIN
        DECLARE desc VARCHAR();
            IF study_material = 'studi kasus' THEN
            SET desc = 'Mahasiswa mempelajari dan memahami materi sesuai dengan fenomena yang terjadi di sekitar';

            ELSE IF study_material = 'presentasi' THEN
            SET desc = 'Mahasiswa mempresentasikan materi yang dipelajari di depan kelas';

            ELSE IF study_material = 'diskusi' THEN
            SET desc = 'Mahasiswa melakukan diskusi aktif di dalam kelas tantang materi yang dipelajari';
            END IF;
            
            SELECT desc;
            END;

            ";
  
        \DB::unprepared($ifelse_procedure);

    //LOOP get learning plan each week - Ahmad Fauzi - 215150700111037
    $loop_procedure = "DROP PROCEDURE IF EXISTS `get_learning_plan_loop`;
        CREATE PROCEDURE `get_learning_plan_loop` (IN week_number int)

        BEGIN
        DECLARE i INT;
        SET i = 0;
                
        ulang: LOOP
            IF i > week_number THEN
                LEAVE ulang;
            END IF;

            SET i = i + 1;
            SELECT week_number, study_material, learning_method FROM learning_plan where id = i;
        END LOOP;
            
        END;

        ";
  
        \DB::unprepared($loop_procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_plan_store_procedure');
    }
};
