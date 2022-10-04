<?php

namespace Database\Seeders;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\CourseClass;
use App\Models\CourseLearningOutcome;
use App\Models\Faculty;
use App\Models\IntendedLearningOutcome;
use App\Models\LearningPlan;
use App\Models\LessonLearningOutcome;
use App\Models\Rubric;
use App\Models\StudyProgram;
use App\Models\Syllabus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()->create([
            'email' => 'admin@siobe.com',
            'name' => 'Admin',
        ]);

        Faculty::factory(1)->create()->each(function ($faculty) use ($admin) {
            StudyProgram::factory(5)->create([
                'faculty_id' => $faculty->id
            ])->each(function ($study_program) use ($admin) {
                $students = User::factory(100)->create();
                $teachers = User::factory(5)->create();

                Course::factory(10)->create([
                    'study_program_id' => $study_program->id,
                    'creator_user_id' => $admin->id,
                ])->each(function ($course) use ($teachers, $students) {

                    Syllabus::factory(1)->create([
                        'course_id' => $course->id,
                    ])->each(function ($syllabus) {
                        $ilos = IntendedLearningOutcome::factory(rand(3,5))->create([
                            'syllabus_id' => $syllabus->id,
                        ])->each(function ($ilo) {
                            CourseLearningOutcome::factory(rand(3,5))->create([
                                'ilo_id' => $ilo->id,
                            ])->each(function ($clo) {
                                LessonLearningOutcome::factory(rand(3,5))->create([
                                    'clo_id' => $clo->id,
                                ]);
                            });
                        });

                        LearningPlan::factory(14)->create([
                            'llo_id' => $ilos->random(1)->first()
                                ->courseLearningOutcomes->random(1)->first()
                                ->lessonLearningOutcomes->random(1)->first()->id,
                        ])->each(function ($learning_plan) {

                        });
                    }); // end Syllabus

                    CourseClass::factory(rand(2,5))->create([
                        'course_id' => $course->id,
                        'creator_user_id' => $teachers->random(1)[0]->id
                    ])->each(function ($course_class) use ($teachers, $students) {
                        $course_class->students()->attach($students->random(rand(10, 20)));
                    });
                });
            });
        });
    }
}
