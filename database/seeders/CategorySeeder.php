<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        foreach (range(1,5) as $index) {
            $category = $faker->unique()->name;
            Category::updateOrCreate([
                'name' => $category,
                'slug' => Str::slug($category),
                'status' => rand(false, true)
            ]);
        }
    }
}
