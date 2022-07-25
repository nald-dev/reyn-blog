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
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 4),
            'category_id' => mt_rand(1, 2),
            'title' => fake()->sentence(mt_rand(2, 4)),
            'slug' => fake()->unique()->slug(),
            'excerpt' => fake()->sentence(10, 16),
            'body' => fake()->paragraph(mt_rand(4, 10)),
        ];
    }
}
