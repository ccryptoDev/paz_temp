<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Chapter;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
//        \App\Models\Course::factory(10)->create();
        Chapter::factory(5)->create();
        Lesson::factory(32)->create();
        Blog::factory(100)->create();
    }
}
