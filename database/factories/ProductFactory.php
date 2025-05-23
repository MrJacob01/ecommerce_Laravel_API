<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "category_id"=>rand(1, 3),
            "name"=>[
                'uz'=>fake()->sentence(2),
                'en'=>fake()->sentence(2),
            ],
            "price"=>50,
            "description"=>[
                'uz'=>fake()->text(60),
                'en'=>fake()->text(60),
            ],
        ];
    }
}
