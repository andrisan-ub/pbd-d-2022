<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Answer;
use App\Models\DiscussForum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FakeDataSeeder::class);

        DiscussForum::create([
            'creator_user_id' => 2,
            'course_id' => 1,
            'question' => 'Jika saya ingin menggunakan tools localhost untuk OS Windows, aplikasi apakah yang bisa saya gunakan?'
        ]);

        DiscussForum::create([
            'creator_user_id' => 3,
            'course_id' => 1,
            'question' => 'Bagaimana cara membuat function dengan menggunakan migrasi Laravel?'
        ]);

        Answer::create([
            'creator_user_id' => 4,
            'discuss_forum_id' => 1,
            'answer' => 'Bisa menggunakan aplikasi XAMPP'
        ]);

        Answer::create([
            'creator_user_id' => 5,
            'discuss_forum_id' => 1,
            'answer' => 'Bisa menggunakan aplikasi Laragon'
        ]);

        Answer::create([
            'creator_user_id' => 6,
            'discuss_forum_id' => 2,
            'answer' => 'Bisa menggunakan DB::unprepared(write code in here)'
        ]);
    }
}
