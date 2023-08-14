<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(), 
            'content' => $this->faker->text(200),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 6),
        ];
    }
}
