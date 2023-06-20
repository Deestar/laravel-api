<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => fake()->name(),
            'price' => fake()->numberBetween(12000, 50000),
            "color" => fake()->colorName(),
            "image" => fake()->imageUrl(),
            "likes" => fake()->numberBetween(1, 50),
            "type" => fake()->text(10),
            "trending" => fake()->boolean(70),

        ];
    }

}
