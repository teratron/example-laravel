<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),//$this->faker->numberBetween(1, 10),
            'salary' => sprintf('$%d.00', fake()->numberBetween(50000, 150000)),//'$100000.00',
            //'description' => $this->faker->paragraph(),
        ];
    }
}
