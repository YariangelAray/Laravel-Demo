<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Image;
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
            'name' => fake()->word(),
            'price' => fake()->randomFloat(2, 10, 100),
            'stock' => rand(1, 100),
            'category_id' => Category::all()->random()->id
            // 'img_id' => Image::factory()->create()->id,
        ];
    }
}
