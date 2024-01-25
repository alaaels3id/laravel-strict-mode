<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title'   => fake()->sentence(),
            'body'    => fake()->sentence(),
        ];
    }
}
