<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1,10) as $index) {
            Post::updateOrCreate([
                'user_id' => rand(1,10),
                'category_id' => rand(1,5),
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'thumbnail' => $faker->imageUrl(),
                'status' => $this->getRandomStatus(),
            ]);
        }
    }


    public function getRandomStatus()
    {
        # Generate Random Status
        $status = array('draft', 'published');
        return $status[array_rand($status)];
    }
}
