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
        // $after_assignment_insert = 'DROP TRIGGER IF EXISTS `after_assignment_insert`;
        // CREATE TRIGGER after_assignment_insert
        // AFTER INSERT
        // ON `assignments` FOR EACH ROW
        // BEGIN
        //         INSERT INTO notifications(assignments_id, jenis_notifikasi, judul_notifikasi, pesan_notifikasi)
        // VALUES(new.id, "announcement", "Wahh, Tugas Baruuu Nihh", new.note);
        // END;';
        // DB::unprepared($after_assignment_insert);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trigger');
    }
};
