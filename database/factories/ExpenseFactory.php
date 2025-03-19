<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'amount' => $this->faker->randomFloat(2, 1, 1000), // Random amount between 1 and 1000
            'category_id' => Category::pluck('id')->random(),
            'notes' => $this->faker->optional()->sentence(), // Optional fake note
        ];
    }
}
