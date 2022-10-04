<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'objective' => fake()->sentence,
            'title' => fake()->words(5),
            'is_group_assignment' => fake()->boolean,
            'assignment_style' => fake()->words(5),
            'description' => fake()->sentence,
            'output_instruction' => fake()->sentence,
            'submission_instruction' => fake()->sentence,
            'dealine_instruction' => fake()->sentence
        ];
    }
}
