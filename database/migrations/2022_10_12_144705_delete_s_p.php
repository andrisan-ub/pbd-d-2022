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
        // DELETE PROCEDURE - Rama Adhitya Widodo Putra - 215150700111052
        // Prosedur untuk menghapus data pada tabel users berdasarkan id ke-x
        $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok5_delete_users`;
        CREATE PROCEDURE `kelompok5_delete_users` (
            IN x bigint(20)
        )
        BEGIN
            DELETE FROM users
            WHERE id = x;
        END;";

        DB::unprepared($procedure_delete);

        // DELETE PROCEDURE - Nur Fathiyyah - 215150700111048
        // Prosedur untuk menghapus data pada tabel faculties berdasarkan id
        $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok5_delete_faculty`;
        CREATE PROCEDURE `kelompok5_delete_faculty` (
            df_id bigint(20)
        )
        BEGIN
            DELETE FROM faculty
            WHERE id = df_id;
        END;";

        DB::unprepared($procedure_delete);

        // DELETE PROCEDURE - Nur Fathiyyah - 215150700111048
        // Prosedur untuk menghapus data pada tabel assignments berdasarkan id
        $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok5_delete_assignment`;
        CREATE PROCEDURE `kelompok5_delete_assignment` (
            da_id bigint(20)
        )
        BEGIN
            DELETE FROM faculty
            WHERE id = da_id;
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
        Schema::dropIfExists('delete_s_p');
    }
};