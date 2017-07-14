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
                'avatar' => "$i.jpg",
                'art_quote' => $faker->realText(90),
                'simple_description' => $faker->sentence(2),
                'description' => $faker->realText(),
                'facebook_link' => 'facebook.com/'.$faker->realText(6),
                'instagram_link' => 'instagram.com/'.$faker->realText(6),
                'youtube_link' => 'youtube.com/'.$faker->realText(6),
                'twitter_link' => 'twitter.com/'.$faker->realText(6)
            ];
            User::create($user);
        }
    }
}
