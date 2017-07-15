<?php

use Illuminate\Database\Seeder;
use App\Pillar;

class PillarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $pillars = ["MUSIC", "PHOTOGRAPHY", "MEDIA", "DRAMA", "DANCE", "FASHION", "POETRY", "BRANDING & DESIGN", "PAINTING"];

        for ($i = 0; $i < count($pillars); $i++) {
            $pillar = [
                'name' => strtolower($pillars[$i]),
                'description' => $faker->realText(250)
            ];

            Pillar::create($pillar);
        }
    }
}
