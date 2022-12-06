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
        // Menampilkan pesan notifikasi dengan id_notifikasi = 1 
        $cursor_notification = "DROP PROCEDURE IF EXISTS `cursor_notifications`;
        CREATE PROCEDURE `cursor_notifications`()
        BEGIN
        DECLARE n_id int;
        DECLARE n_pesan text;
        DECLARE cur_1 CURSOR FOR SELECT id, pesan_notifikasi FROM notifications;
        OPEN cur_1;
        FETCH FROM cur_1 INTO n_id, n_pesan;
        IF n_id = 1 THEN
        SELECT n_pesan;
        END IF;
        CLOSE cur_1;
        END;";
        DB::unprepared($cursor_notification);

        // Menampilkan judul notifikasi dan pesan notifikasi dengan id sesuai yang diinputkan
        $cursor_notification = "DROP PROCEDURE IF EXISTS `cursor_notifications_2`;
        CREATE PROCEDURE `cursor_notifications_2`()
        BEGIN
        DECLARE n_id INT;
        DECLARE n_judul, n_pesan TEXT;
        DECLARE cur_2 CURSOR FOR SELECT id, judul_notifikasi, pesan_notifikasi FROM notifications WHERE id = in_id;
        OPEN cur_2;
        FETCH FROM cur_2 INTO n_id, n_judul, n_pesan;
        SELECT n_id, n_judul, n_pesan;
        CLOSE cur_2;
        END;";
        DB::unprepared($cursor_notification);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursor');
    }
};
