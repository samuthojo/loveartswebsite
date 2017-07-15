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
        $types = App\Pillar::all()->modelKeys();

        for ($i=1; $i < 19; $i++) {
            $user = [
                'name' => $faker->name(),
                'email' => $faker->unique()->email(),
                'pillar_id' => $types[rand(0,count($types) - 1)],
                'avatar' => "$i.jpg",
                'art_quote' => $faker->realText(90),
                'simple_description' => $faker->sentence(2),
                'description' => $faker->realText(255),
                'facebook_link' => 'facebook.com/'.$faker->word(),
                'instagram_link' => 'instagram.com/'.$faker->word(),
                'youtube_link' => 'youtube.com/'.$faker->word(),
                'twitter_link' => 'twitter.com/'.$faker->word(),
            ];
            User::create($user);
        }
    }
}
