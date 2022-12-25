<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\questions>
 */
class questionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "category" => $this->faker->sentence(),
            "subCategory" => $this->faker->sentence(),
            "question" => $this->faker->sentence(),
            "trueAnswer" => rand(1,4),
            "answer1" => $this->faker->sentence(),
            "answer2" => $this->faker->sentence(),
            "answer3" => $this->faker->sentence(),
            "answer4" => $this->faker->sentence()
        ];
    }
}
