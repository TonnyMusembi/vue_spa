<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faker::create();

        foreach (range(1,20) as $index) {
            Post::create([
                'title' => $faker->text,
                'slug' => $faker->slug,
                'description' => $faker->text,
                'content' => $faker->content
            ]);
        }
    }
}
