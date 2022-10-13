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
         //procedure update - Rafli Ardiansyah - 215150701111030
         $procedure_update = "DROP PROCEDURE IF EXISTS `kelompok_1_update_courses_by_courses_id`;
         CREATE PROCEDURE `kelompok_1_update_courses_by_courses_id` (new_id int, new_study_program_id int, new_creator_user_id int, new_name varchar(255), new_code varchar(255), new_course_credit int(11), new_lab_credit int(11), new_type enum('mandatory', 'elective'), new_short_description text, new_minimal_requirement varchar (1024), new_study_material_summary text, new_learning_media text)
         BEGIN
         UPDATE courses SET study_program_id = new_study_program_id WHERE id = new_id;
         UPDATE courses SET creator_user_id = new_creator_user_id WHERE id = new_id;
         UPDATE courses SET name = new_name WHERE id = new_id;
         UPDATE courses SET code = new_code WHERE id = new_id;
         UPDATE courses SET courses_credit = new_courses_credit WHERE id = new_id;
         UPDATE courses SET lab_credit = new_lab_credit WHERE id = new_id;
         UPDATE courses SET type = new_type WHERE id = new_id;
         UPDATE courses SET short_description = new_short_description WHERE id = new_id;
         UPDATE courses SET minimal_requirement = new_minimal_requirement WHERE id = new_id;
         UPDATE courses SET study_material_summary = new_study_material_summary WHERE id = new_id;
         UPDATE courses SET learning_media = new_learning_media WHERE id = new_id;
         END;";

     \DB::unprepared($procedure_update);

     //procedure create - Rafli Ardiansyah - 215150701111030
     $procedure_create = "DROP PROCEDURE IF EXISTS `kelompok_1_create_courses_by_courses_id`;
         CREATE PROCEDURE `kelompok_1_create_courses_by_courses_id` (new_id int, new_study_program_id int, new_creator_user_id int, new_name varchar(255), new_code varchar(255), new_courses_credit int(11), new_lab_credit int(11), new_type enum('mandatory', 'elective'), new_short_description text, new_minimal_requirement varchar (1024), new_study_material_summary text, new_learning_media text, new_created_at datetime, new_updated_at datetime)
         BEGIN
         INSERT INTO courses
         VALUES(new_id, new_study_program_id, new_creator_user_id, new_name, new_code, new_courses_credit, new_lab_credit, new_type, new_short_description, new_minimal_requirement, new_study_material_summary, new_learning_media, new_created_at, new_updated_at);
         END;";

     \DB::unprepared($procedure_create);

     //procedure delete - Rafli Ardiansyah - 215150701111030
     $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok_1_delete_courses_by_courses_id`;
         CREATE PROCEDURE `kelompok_1_delete_courses_by_courses_id` (new_id int)
         BEGIN
         DELETE FROM courses
         WHERE id = new_id;
         END;";

     \DB::unprepared($procedure_delete);

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
