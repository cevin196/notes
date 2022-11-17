<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => fake()->sentence(rand(2, 5), true),
            'body' => fake()->paragraph(4, true),
            'seen' => rand(0, 100),
        ];
    }
}
