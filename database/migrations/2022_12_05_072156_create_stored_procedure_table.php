<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // STORED PROCEDURE - CREATE
        $create_procedure = "DROP PROCEDURE IF EXISTS `sp_create_notification`;
        CREATE PROCEDURE `sp_create_notification`()
        BEGIN
	        INSERT INTO notifications VALUES (cr_id, cr_assignments_id, cr_jenis_notifikasi, cr_judul_notifikasi, cr_pesan_notifikasi, cr_created, cr_updated);
        END;";
        DB::unprepared($create_procedure);

        // STORED PROCEDURE - READ
        $read_procedure = "DROP PROCEDURE IF EXISTS `sp_view_notification`;
         CREATE PROCEDURE `sp_view_notification`()
         BEGIN
            SELECT n.id, n.assignments_id, n.jenis_notifikasi, n.judul_notifikasi, n.pesan_notifikasi, n.created_at, n.updated_at
            FROM notifications n
            JOIN assignments a
            ON n.id = a.id;
        END;";
        DB::unprepared($read_procedure);

        // STORED PROCEDURE - DELETE
        $create_procedure = "DROP PROCEDURE IF EXISTS `sp_delete_notification`;
        CREATE PROCEDURE `sp_delete_notification`()
        BEGIN
           DELETE FROM notifications WHERE id = new_id;
        END;";
        
        DB::unprepared($create_procedure);

        // STORED PROCEDURE - Menampilkan jenis notifikasi 'reminder'
        $read_procedure = "DROP PROCEDURE IF EXISTS `sp_jenis_notifikasi_reminder`;
         CREATE PROCEDURE `sp_jenis_notifikasi_reminder`()
         BEGIN
            SELECT * FROM notifications where jenis_notifikasi= 'reminder';
         END;";
        DB::unprepared($read_procedure);

        // STORED PROCEDURE - Menampilkan jenis notifikasi 'announcement'
        $read_procedure = "DROP PROCEDURE IF EXISTS `sp_jenis_notifikasi_announcement`;
         CREATE PROCEDURE `sp_jenis_notifikasi_announcement`()
         BEGIN
         SELECT * FROM notifications where jenis_notifikasi= 'announcement';
         END;";
        DB::unprepared($read_procedure);

        // STORED PROCEDURE - Menampilkan pesan notifikasi 'H-1 deadline'
        $read_procedure = "DROP PROCEDURE IF EXISTS `sp_h-1deadline`;
         CREATE PROCEDURE `sp_h-1deadline`()
         BEGIN
         SELECT * FROM notifications where pesan_notifikasi= 'H-1 deadline';
         END;";
        DB::unprepared($read_procedure);

        

    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('stored_procedure');
        Schema::dropIfExists('create_procedure');
        Schema::dropIfExists('read_procedure');
    }
};
