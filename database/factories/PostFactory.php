<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'details'       => $this->faker->sentences(4, true),
            'author'         => $this->faker->name(),
            'is_fulfilled' => $this->faker->boolean(),
        ];
    }
}
