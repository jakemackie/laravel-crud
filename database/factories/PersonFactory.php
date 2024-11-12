<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name,
            "age" => fake()->numberBetween(16, 100),
            "bio" => fake()->realText(500),

            // Assign a random team to the person (relationship)
            "team_id" => Team::inRandomOrder()->first()->id,
        ];
    }
}
