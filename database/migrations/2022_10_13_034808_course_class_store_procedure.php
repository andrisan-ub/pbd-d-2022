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
         $get_procedure = "DROP PROCEDURE IF EXISTS `get_course_class_by_id`;
         CREATE PROCEDURE `get_course_class_by_id` (IN id_crs_cls int)

         BEGIN
         SELECT * FROM course_class WHERE id = id_crs_cls;
         END;

         ";

        \DB::unprepared($get_procedure);

        //create procedure - Muhammad Yusuf Alhafiz - 215150707111022
        $create_procedure = "DROP PROCEDURE IF EXISTS `create_course_class_by_id`;
            CREATE PROCEDURE `create_course_class_by_id` (
                id_crs_cls int,
                crs_id int,
                crs_name varchar(1024),
                thumb_img varchar(1024),
                cls_code varchar(256),
                creator_usr_id int,
                new_created_at int,
                new_updated_at int )

            BEGIN
            INSERT INTO course_class(
                id, course_id, name, thumbnail_img, class_code, creator_user_id, created_at, updated_at)
            VALUES(
                id_crs_cls, crs_id, crs_name, thumb_img, cls_code, creator_usr_id, new_created_at, new_updated_at);
            END;
            
            ";

        \DB::unprepared($create_procedure);
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
