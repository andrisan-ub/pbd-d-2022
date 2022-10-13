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
        //procedure read criteria and criteria levels - Muchammad Saifurrijaal - 215150701111006
        $procedure_read = "DROP PROCEDURE IF EXISTS `kelompok_1_read_criterias_and_criterias_level`;
            CREATE PROCEDURE `kelompok_1_read_criterias_and_criterias_level` ()
            BEGIN
            SELECT c.title AS criteria_title, cl.title AS criteria_levels_title
            FROM criterias c
            JOIN criteria_levels cl ON c.id = cl.criteria_id;
            END;";

        \DB::unprepared($procedure_read);

        //procedure read student_user and course - Muchammad Saifurrijaal - 215150701111006
        $procedure_read = "DROP PROCEDURE IF EXISTS `kelompok_1_read_student_user_and_course`;
            CREATE PROCEDURE `kelompok_1_read_student_user_and_course` ()
            BEGIN
            SELECT u.name AS student_name, c.name AS course_name
            FROM student_grades sg
            JOIN users u ON sg.student_user_id = u.id 
            JOIN assignments a ON a.id = sg.assignment_id
            JOIN course_classes cc ON cc.id = a.course_class_id
            JOIN courses c ON c.id = cc.course_id
            WHERE u.role = 'student';
            END;";
        \DB::unprepared($procedure_read);
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
