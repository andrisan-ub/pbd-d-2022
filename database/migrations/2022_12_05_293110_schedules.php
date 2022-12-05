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
            id bigint(20),
            course_class_id bigint(20),
            rooms_id bigint(20),
            teacher varchar(255),
            day varchar(255),
            start_time time,
            end_time time)

        )
        BEGIN
        INSERT INTO schedule
            VALUES(id, course_class_id, rooms_id, teacher, day, start_time ,end_time);
        END;";

        DB::unprepared($procedure_create);

        // SP - Read procedure
        $procedure_read = "DROP PROCEDURE IF EXISTS `read_schedule`;
        CREATE PROCEDURE `read_schedule`()
        BEGIN
            SELECT * FROM schedule;
        END;";
            
        DB::unprepared($procedure_read);

        // SP - Update Schedule
        $procedure_update = "DROP PROCEDURE IF EXISTS `update_schedule`;
        CREATE PROCEDURE `update_schedule` (
            IN id bigint(20),
            IN course_class_id bigint(20),
            IN rooms_id bigint(20),
            IN teacher varchar(255),
            IN day varchar(255),
            IN start_time time,
            IN end_time time
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
        CREATE PROCEDURE `delete_Schedule` (IN d_id bigint(20))
        BEGIN
            DELETE FROM questions
            WHERE id = d_id;
        END;";

        DB::unprepared($procedure_delete);
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

    //function
    DB::unprepared("
            DROP FUNCTION IF EXISTS duration;
            CREATE FUNCTION duration(start time, end time) RETURNS INT
            BEGIN
                DECLARE duration INT;
                set duration = DATEDIFF(second, start, end);
            RETURN duration;
            END;");
};
