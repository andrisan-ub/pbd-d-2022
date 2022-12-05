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
    }
};
