<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $types = ["MUSIC", "PHOTOGRAPHY", "MEDIA", "DRAMA", "DANCE", "FASHION", "POETRY", "BRANDING & DESIGN", "PAINTING"];

        for ($i=1; $i < 19; $i++) {
            $user = [
                'name' => $faker->name(),
                'email' => $faker->unique()->email(),
                'type' => strtolower($types[rand(0,8)]),
                'avatar' => "$i.jpg"
            ];
            User::create($user);
        }
    }
}
