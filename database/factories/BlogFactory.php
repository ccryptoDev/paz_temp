<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => 1,
            'title' => $this->faker->text(50),
            'content' => $this->faker->realText(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
