<?php

namespace Database\Factories;
use App\Models\UserBlog;
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
            'title'=>fake()->sentence(1),
            'content'=>fake()->sentence(5),
            'user_id'=>UserBlog::factory()
        ];
    }
}
