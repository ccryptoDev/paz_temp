<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chapter_id' => 1,
            'course_id' => 1,
            'name' => $this->faker->unique()->text(30),
            'content' => $this->faker->text(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
