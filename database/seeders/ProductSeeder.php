<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(50)->create()->each(function (Product $product) {
            Image::factory(rand(1,5))->create([
                'imageable_id' => $product->id,
                'imageable_type'=> Product::class
            ]);            
        });
    }
}
