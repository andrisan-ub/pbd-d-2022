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
        // DELETE PROCEDURE - Rama Adhitya Widodo Putra - 215150700111052
        // Prosedur untuk data pada tabel users berdasarkan id ke-x
        $procedure_delete = "DROP PROCEDURE IF EXISTS `kelompok5_delete_users`;
        CREATE PROCEDURE `kelompok5_delete_users` (
            IN x INT
        )
        BEGIN
            DELETE FROM users
            WHERE id = x;
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
