<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=1; $i < 19; $i++) {
            $event = [
                'title' => $faker->sentence($faker->numberBetween(3, 5)),
                'description' => $faker->realText(120),
                'poster' => "$i.jpg",
                'location' => $faker->city(),
                'url' => $faker->url(),
                'date' => $faker->dateTime()
            ];
            Event::create($event);
        }
    }
}
