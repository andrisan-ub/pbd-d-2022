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
        Schema::create ('questions', function (Blueprint $table){
          $table->id();
          $table->string('question');
        });

        Schema::create ('satisfactions', function (Blueprint $table){
          $table->id();
          $table->integer('point')->nullable();
          $table->string('description')->nullable();
        });

        Schema::create ('user_answers', function (Blueprint $table){
          $table->id();
          $table->foreignId('user_id')->constrained('users');
          $table->foreignId('course_class_id')->constrained('course_classes');
          $table->foreignId('question_id')->constrained('questions');
          $table->foreignId('satisfaction_id')->constrained('satisfactions');
          $table->timestamp('submitted_at')->nullable();
        });

        // SP - Create Question
        $procedure_create = "DROP PROCEDURE IF EXISTS `create_questions`;
        CREATE PROCEDURE `create_questions` (
            IN question varchar(255)
        )
        BEGIN
        INSERT INTO questions
            VALUES(id, question);
        END;";

        DB::unprepared($procedure_create);

        // SP - Read Question
        $procedure_read = "DROP PROCEDURE IF EXISTS `read_questions`;
        CREATE PROCEDURE `read_questions`()
        BEGIN
            SELECT id, question
            FROM questions;
        END;";
            
        DB::unprepared($procedure_read);

        // SP - Update questions
        $procedure_update = "DROP PROCEDURE IF EXISTS `update_questions`;
        CREATE PROCEDURE `update_questions` (
            IN up_id bigint(20),
            IN up_question varchar(255)
        )
        BEGIN
        UPDATE questions SET question = up_question
        WHERE id = up_id;
        END;";

        DB::unprepared($procedure_update);

        // SP - Delete questions
        $procedure_delete = "DROP PROCEDURE IF EXISTS `delete_questions`;
        CREATE PROCEDURE `delete_questions` (
            IN d_id bigint(20)
        )
        BEGIN
            DELETE FROM questions
            WHERE id = d_id;
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
        Schema::dropIfExists('user_answers');
        Schema::dropIfExists('satisfactions');
        Schema::dropIfExists('questions');
    }
};
