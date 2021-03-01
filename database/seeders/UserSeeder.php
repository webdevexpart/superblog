<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->defaultUser();

        $faker = Factory::create();

        foreach (range(1, 10) as $index) {
            User::updateOrCreate([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => Hash::make($faker->password)
            ]);
        }
    }


    public function defaultUser()
    {
        User::updateOrCreate([
            'name' => 'Admin',
            'email' => 'blog@blog.com',
            'password' => Hash::make('password')
        ]);
    }
}
