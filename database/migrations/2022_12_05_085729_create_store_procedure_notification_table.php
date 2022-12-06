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
    
    DB::unprepared("
        DROP PROCEDURE IF EXISTS `get_notification_by_id`;
        CREATE PROCEDURE  `get_notification_by_id` (IN id_notif int)
        
        SELECT notification.id, notification.student_user_id, notification.crisis_center_id, notification.response_id, notification.response, users.name, users.email, crisis_center.study_program_id, crisis_center.keluhan
        FROM notification
        INNER JOIN users ON notification.id = users.id
        INNER JOIN crisis_center ON crisis_center.id = notification.id;");
        
    DB::unprepared("   
        DROP PROCEDURE IF EXISTS `create_notification_by_id`;
        CREATE PROCEDURE `create_notification_by_id` (
            IN id_notif int, 
            IN id_student_user int,
            IN id_cc int, 
            IN id_response int,
            IN new_keluhan varchar(1024),
            IN new_response varchar(1024)
        )

        BEGIN 
        INSERT INTO crisis_center(id, student_user_id, crisis_center_id, study_user_id, response_id, keluhan, response)
        VALUES(id_notif, id_student_user, id_cc, id_response, new_keluhan, new_response);
        END;");

    DB::unprepared("
        DROP PROCEDURE IF EXISTS `update_notification_by_id`;
        CREATE PROCEDURE `update_notification_by_id` (
            IN id_notif int, 
            IN new_keluhan varchar(1024)
        )

        BEGIN 
        UPDATE notification SET keluhan = new_keluhan
        WHERE id = id_notif;
        END;");

    DB::unprepared("
    DROP PROCEDURE IF EXISTS `delete_notification_by_id`;
        CREATE PROCEDURE `delete_notification_by_id` (
            id_notif int
        )

        BEGIN 
        DELETE FROM notification
        WHERE id = id_notification;
        END;");
    
    DB::unprepared("
        DROP PROCEDURE IF EXISTS `if_notification`;
        CREATE PROCEDURE `if_notification` (IN input int)
        BEGIN
        IF input < 10 THEN

        SELECT * FROM notification
        WHERE id = input;
        END IF;
        END;");
    
    DB::unprepared("
        DROP PROCEDURE IF EXISTS `loop_notification`;
        CREATE PROCEDURE `loop_notification`() 
        BEGIN
        DECLARE n int;
        set n = 0;
        WHILE n <= 5 DO
        SELECT * FROM crisis_center
        WHERE id = n;
        set n = n + 1;
        END WHILE;
        END;");
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_procedure_notification');
    }
};