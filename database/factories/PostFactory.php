<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
            // ? pones el titulo en una variable
            'user_id'=> 1,
            'title' => $title= $this->faker->sentence(),
            // ? con Str conviertes el titulo en una URL amigable
            'slug' => Str::slug($title),
            'body' => $this->faker->text(2200),
        ];
    }
}