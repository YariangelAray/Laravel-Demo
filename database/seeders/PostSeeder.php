<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(50)->create()->each(function (Post $post) {
            Image::factory()->create([
                'imageable_id' => $post->id,
                'imageable_type'=> Post::class
            ]);  
            

            // $images = Image::factory(1)->create();  
            
            // $post->image()->attach($images->pluck('id'), [
            //     'imageable_id'=>$post->id,
            //     'imageable_type'=> Post::class]);

            // $post->image()->attach($images->pluck('id'));
        });
    }
}
