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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_class_id')->constrained('course_classes');
            $table->foreignId('rooms_id')->constrained('rooms');
            $table->string('teacher');
            $table->string('day');
            $table->time('start_time', $precision = 0);
            $table->time('end_time', $precision = 0);
        });

        // SP - Create Schedule
        $procedure_create = "DROP PROCEDURE IF EXISTS `create_schedule`;
        CREATE PROCEDURE `create_schedule` (
            id_schedule bigint(20),
            crs_cls_id bigint(20),
            rm_id bigint(20),
            tch varchar(255),
            dy varchar(255),
            str_time time,
            ed_time time)

        )
        BEGIN
        INSERT INTO schedule(
            id, course_class_id, rooms_id, teacher, day, start_time ,end_time);
        VALUES(
            id_schedule, crs_cls_id, rm_id, tch, dy, str_time ,ed_time);
        END;";

        DB::unprepared($procedure_create);

        // SP - Read procedure
        $procedure_read = "DROP PROCEDURE IF EXISTS `read_schedule`;
        CREATE PROCEDURE `read_schedule`(IN id_schedule bigint(20))
        BEGIN
            SELECT * FROM schedule WHERE id = id_schedule;
        END;";

        DB::unprepared($procedure_read);
        
        // SP - Update Schedule
        $procedure_update = "DROP PROCEDURE IF EXISTS `update_schedule`;
        CREATE PROCEDURE `update_schedule` (
            IN id_schedule bigint(20),
            IN crs_cls_id bigint(20),
            IN rm_id bigint(20),
            IN tch varchar(255),
            IN dy varchar(255),
            IN str_time time,
            IN ed_time time
        )
        BEGIN
        UPDATE schedule SET id = id_schedule WHERE id = id_schedule;
        UPDATE schedule SET course_class_id = crs_cls_id WHERE id = id_schedule;
        UPDATE schedule SET rooms_id = rm_id WHERE id = id_schedule;
        UPDATE schedule SET teacher = tch WHERE id = id_schedule;
        UPDATE schedule SET day = dy WHERE id = id_schedule;
        UPDATE schedule SET start_time = str_time WHERE id = id_schedule;
        UPDATE schedule SET end_time = ed_time WHERE id = id_schedule;
        END;";

        DB::unprepared($procedure_update);

        // SP - Delete Schedule
        $procedure_delete = "DROP PROCEDURE IF EXISTS `delete_Schedule`;
        CREATE PROCEDURE `delete_Schedule` (IN id_schedule bigint(20))
        BEGIN
            DELETE FROM schedule
            WHERE id = id_schedule;
        END;";

        DB::unprepared($procedure_delete);

        //function
        DB::unprepared("
        DROP FUNCTION IF EXISTS duration;
        CREATE FUNCTION duration(start time, end time) RETURNS INT
        BEGIN
            DECLARE duration INT;
            set duration = DATEDIFF(minute, start, end);
        RETURN duration;
        END;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
