<?php

use App\Models\Post;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newPost = new Post();

            $newPost->name = $faker->name();
            $newPost->date = $faker->date('Y_m_d');
            $newPost->description = $faker->words(10, true);
            $newPost->save();
        }
    }
}
