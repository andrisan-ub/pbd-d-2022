<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
        });

        Schema::create('satisfactions', function (Blueprint $table) {
            $table->id();
            $table->integer('point')->nullable();
            $table->string('description')->nullable();
        });

        Schema::create('user_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('course_class_id')->constrained('course_classes');
            $table->foreignId('question_id')->constrained('questions');
            $table->foreignId('satisfaction_id')->constrained('satisfactions');
            $table->timestamp('submitted_at')->nullable();
        });

        Schema::create('trash_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('course_class_id')->constrained('course_classes');
            $table->foreignId('question_id')->constrained('questions');
            $table->foreignId('satisfaction_id')->constrained('satisfactions');
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });

        // SP - Create Question (membuat pertanyaan)
        $procedure_create = "DROP PROCEDURE IF EXISTS `create_questions`;
        CREATE PROCEDURE `create_questions` (
            IN question varchar(255)
        )
        BEGIN
        INSERT INTO questions
            VALUES(id, question);
        END;";

        DB::unprepared($procedure_create);

        // SP - Read Question (menunjukkan id, nama,kelas, pertanyaan, kepuasan, waktu pengumpulan)
        $procedure_read = "DROP PROCEDURE IF EXISTS `read_questions`;
        CREATE PROCEDURE `read_questions`()
        BEGIN     
        select ua.id, u.name as username, cl.name kelas, q.question as survey,
        s.description as kepuasan, ua.submitted_at as waktu_pengumpulan
        from user_answers ua
        join users u on u.id = ua.user_id
        join course_classes cl on cl.id = ua.course_class_id
        join questions q on q.id = ua.question_id
        join satisfactions s on s.id = ua.satisfaction_id
        order by u.id;
        END;";

        DB::unprepared($procedure_read);

        // SP - Update questions (update pertanyaan, dengan setting variabel untuk trigger)
        $procedure_update = "DROP PROCEDURE IF EXISTS `update_questions`;
        CREATE PROCEDURE `update_questions` (
            IN question_id bigint(20),
            IN question varchar(255)
        )
        BEGIN
        UPDATE questions
        SET question = question, id = (SELECT @update_id := id)
        WHERE id = question_id LIMIT 1;
        END;";

        DB::unprepared($procedure_update);

        // SP - Delete questions (menghapus pertanyaan)
        $procedure_delete = "DROP PROCEDURE IF EXISTS `delete_questions`;
        CREATE PROCEDURE `delete_questions` (
            IN question_id bigint(20)
        )
        BEGIN
            DELETE FROM questions
            WHERE id = question_id;
        END;";

        DB::unprepared($procedure_delete);

        //SP - Delete user_answers (menghapus semua jawaban user dalam COURSE_CLASS tertentu)
        $procedure_delete = "DROP PROCEDURE IF EXISTS `delete_answers`;
        CREATE PROCEDURE `delete_answers` (
            IN usr_id bigint(20),
            IN crs_cls_id bigint(20)
        )
        BEGIN
            DELETE FROM user_answers
            WHERE user_id = usr_id AND course_class_id = crs_cls_id;
        END;";

        DB::unprepared($procedure_delete);

        //TRIGGER aft_update (menghapus jawaban semua user terhadap pertanyaan yang mengalami update)
        //karena jika pertanyaan diubah, maka harus dijawab kembali oleh user
        DB::unprepared('
        CREATE TRIGGER `aft_update`
        AFTER UPDATE ON `questions` FOR EACH ROW
        DELETE FROM `user_answers`
        WHERE question_id = @update_id;
        ');

        //TRIGGER bef_delete (memasukkan data jawaban yang dihapus, ke tabel trash)
        DB::unprepared('
        CREATE TRIGGER `bef_delete`
        BEFORE DELETE ON `user_answers` FOR EACH ROW
        INSERT INTO `trash_answers`
        VALUES (OLD.id,OLD.user_id,OLD.course_class_id,OLD.question_id,OLD.satisfaction_id,OLD.submitted_at,now());
        ');

        //Cursor untuk menghitung nilai total pada satisfaction_id berdasarkan user_id dan course_class_id pada tabel user_answer
        $cursor_user_answers = "DROP PROCEDURE IF EXISTS satisfactions_from_user_answer;
                CREATE PROCEDURE satisfactions_from_user_answer(OUT total_satisfactions INT)
                BEGIN
                    DECLARE totalSatisfactions, totalPoint, c_satisfaction, c_course_id, c_id, c_end INT;
                    DECLARE cur_1 CURSOR FOR SELECT user_id, course_class_id, satisfaction_id FROM user_answers;
                    DECLARE CONTINUE HANDLER FOR NOT FOUND SET c_end = 1;
                    SET totalSatisfactions = 0, totalPoint = 0, c_satisfaction = 0;
                    OPEN cur_1;
                    WHILE c_end is NULL DO
                    FETCH from cur_1 INTO c_id, c_course_id, c_satisfaction;
                        IF c_id = 7 THEN
                            IF c_course_id = 2 THEN
                                    SET totalSatisfactions = totalSatisfactions + totalPoint;
                                    SET totalPoint = c_satisfaction;
                            END IF;
                       END IF;
                     END WHILE;
                    CLOSE cur_1;
                        Set total_satisfactions = totalSatisfactions + totalPoint;       
                END;";
        DB::unprepared($cursor_user_answers);


        //Function - Menampilkan banyaknya pertanyaan yang telah terjawab oleh user
        $stored_function = "DROP PROCEDURE IF EXISTS get_jumSubmit;
        CREATE FUNCTION `get_jumSubmit`() 
        RETURNS INT(11)
        BEGIN 
            DECLARE submitted INT; 
            SELECT COUNT(id) 
            INTO submitted 
            FROM user_answers; 
            RETURN submitted; 
        END;";

        DB::unprepared($stored_function);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trash_answers');
        Schema::dropIfExists('user_answers');
        Schema::dropIfExists('satisfactions');
        Schema::dropIfExists('questions');
    }
};