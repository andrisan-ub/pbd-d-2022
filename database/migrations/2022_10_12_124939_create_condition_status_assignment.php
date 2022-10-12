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
        
        // Procedure seleksi kondisi - Deswita Marsya Nadia - 215150701111001
        // mengembalikan nilai dari kolom assignment_plan
      $status_assignment = "DROP PROCEDURE IF EXISTS `kelompok3_condition_status_assignment`;
      CREATE PROCEDURE `kelompok3_condition_status_assignment`()
      BEGIN
          	
        SELECT assignment_plans.title, assignment_plan_tasks.description, 
        if(assignment_plans.is_group_assignment is true, 'Kelompok', 'Individu') AS model_pengerjaan
        from assignment_plans 
        join  assignment_plan_tasks on assignment_plans.id = assignment_plan_tasks.assignment_plan_id;
     
      END;";
            
      DB::unprepared($status_assignment);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  
    public function down()
    {
        Schema::dropIfExists('kelompok3_condition_status_assignment');
    }
};
