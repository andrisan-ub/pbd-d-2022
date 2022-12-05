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
        DB::unprepared("DROP PROCEDURE IF EXISTS cursor_search_kategori;
                CREATE PROCEDURE cursor_search_kategori(in search_kategori TEXT)
                BEGIN
	                DECLARE id_new, student_user_id_new, 
			                study_program_id_new, topik_new, keluhan_new TEXT;
	                DECLARE exit_loop boolean default false;
	                DECLARE csr_1 CURSOR FOR SELECT id, student_user_id, study_program_id, topik, keluhan from crisis_center cc; 
	                DECLARE continue handler for not found set exit_loop = true;
	                OPEN csr_1;
	                show_loop :LOOP
		                FETCH FROM csr_1 INTO id_new, student_user_id_new, 
			                study_program_id_new, topik_new, keluhan_new;
	                IF exit_loop THEN
	                LEAVE show_loop;
	                END IF;
	                IF topik_new = search_kategori THEN
	                SELECT id_new, student_user_id_new, 
			                study_program_id_new, topik_new, keluhan_new;
	                END IF;
	                END LOOP show_loop;
	                close csr_1;
                END;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursor_search_kategori');
    }
};
