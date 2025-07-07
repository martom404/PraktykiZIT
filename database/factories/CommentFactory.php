<?php

namespace Database\Factories;
use App\Models\UserBlog;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content'=>fake()->sentence(),
            'user_id'=>UserBlog::factory(),
            'post_id'=>Post::factory()
            
        ];
    }
}
