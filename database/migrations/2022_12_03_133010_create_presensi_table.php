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
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Mahasiswa');
            $table->foreignId('NIM')->constrained('users');
            $table->foreignId('ID_Class')->constrained('course_classes');
            $table->string('Class');
            $table->timestamp('Waktu_Kehadiran');
            $table->string('Keterangan')->nullable();
            $table->integer('Total_Pertemuan');
        });

        Schema::create('ket_presensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Presensi_ID')->constrained('presensi')->nullable();
            $table->integer('Hadir')->nullable();
            $table->integer('Alpha')->nullable();
            $table->integer('Izin')->nullable();
            $table->integer('Sakit')->nullable();
        });

        // $dynamic_sql = 'DROP PROCEDURE IF EXISTS `SP_DELETE_TABLE`;
        // CREATE PROCEDURE `SP_DELETE_TABLE` (
        //     IN TBL VARCHAR (50),
        //     IN COL_PK VARCHAR (50),
        //     IN VAL_PK VARCHAR (50)
        //     )
        //     BEGIN
        //     SET @SQL=CONCAT ("DELETE FROM ", TBL, "WHERE", COL_PK,"=",VAL_PK);
        //     PREPARE STAT FROM @SQL;
        //     EXECUTE STAT;
        //     END;';
            
        //     DB::unprepared($dynamic_sql);

            
        // CREATE PROCEDURE - 
        $create_procedure = "DROP PROCEDURE IF EXISTS `sp_presensi_create`;
        CREATE PROCEDURE `sp_presensi_create`()
        BEGIN
        insert into presensi VALUES (in_id, in_nama_mahasiswa, in_nim, in_id_class, in_class, 
        in_waktu_kehadiran, in_keterangan, in_total_pertemuan);
        END;";

       DB::unprepared($create_procedure);

          
        // READ PROCEDURE - 
        $read_procedure = "DROP PROCEDURE IF EXISTS `sp_presensi_read`;
        CREATE PROCEDURE `sp_presensi_read`()
        BEGIN
        SELECT p.id, p.nama_mahasiswa, p.nim, p.id_class, p.class, 
        p.waktu_kehadiran, p.keterangan, p.total_pertemuan
            FROM presensi p
            JOIN course_classes cc
            ON p.id = cc.id;
        END;";

       DB::unprepared($read_procedure);

        // UPDATE PROCEDURE - 
        $update_procedure = "DROP PROCEDURE IF EXISTS `sp_presensi_update`;
        CREATE PROCEDURE `sp_presensi_update`()
        BEGIN
           UPDATE presensi SET id = new_id WHERE id = new_id;
           UPDATE presensi SET nama_mahasiswa = new_nama_mahasiswa WHERE id = new_id;
        END;";

       DB::unprepared($update_procedure);

         
        // DELETE PROCEDURE - 
        $delete_procedure = "DROP PROCEDURE IF EXISTS `sp_presensi_delete`;
        CREATE PROCEDURE `sp_presensi_delete`()
        BEGIN
        DELETE FROM presensi WHERE id = new_id;
        END;";

       DB::unprepared($delete_procedure);

           
        // FUNCTION - 
        $stored_function = "CREATE FUNCTION 'jumlah_mahasiswa'()
        RETURN int(5)
        BEGIN
            DECLARE jumlah_mahasiswa INT;
            SELECT COUNT(id) AS jumlah_mahasiswa INTO jumlah_mahasiswa FROM presensi
            RETURN jumlah_mahasiswa;
        END";

        //TRIGGER
        // $after_courses_classes_insert= 'DROP TRIGGER IF EXIST `after_courses_classes_insert`;
        // CREATE TRIGGER `after_courses_classes_insert` 
        // AFTER INSERT 
        // ON `presensi`
        // FOR EACH ROW 
        // BEGIN
        //      INSERT INTO ket_presensi(Presensi_ID, Sakit) VALUES (new.id, 1);
        // END;';
        //DB::unprepared($after_courses_classes_insert);
        



       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ket_presensi');
        Schema::dropIfExists('presensi');
    }
};
