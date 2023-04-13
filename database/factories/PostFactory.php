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
            'content' => fake()->text(100),
             'title' => fake()->sentence(),
             'image' => fake()->imageUrl(640, 480, 'animals', true),
             'type_id' => 1,
             'status_id' => 1
        ];
    }
}
