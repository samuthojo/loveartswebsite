<?php

use Illuminate\Database\Seeder;
use App\Info;

class InfosTableSeeder extends Seeder
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
            $isvid = $i == 3 || $i == 7 || $i == 18;

            $info = [
                'title' => $faker->sentence($faker->numberBetween(3, 5)),
                'description' => $faker->realText(120),
                'type' => $isvid ? 1 : 0,
                'url' => $isvid ? "$i.gif" : "$i.jpg"
//                'yt_id' => $faker->dateTime()
            ];
            Info::create($info);
        }
    }
}
