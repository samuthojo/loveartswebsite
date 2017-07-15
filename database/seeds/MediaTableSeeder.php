<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $shows = [
            [
                "youtube_id" => "PL70298B8E028D372C",
                "name" => "\"New York Close Up\" | An Art21 Digital Series",
                "description" => "\"New York Close Up\" is a digital film series devoted to artists in the first decade of their professional career, living and working in New York City. This innovative project provides an intimate look at the next wave of artists—artists close up.",
                'poster_url' => "https://i.ytimg.com/vi/AOsNa8au3eI/sddefault.jpg"
            ],
            [
                "youtube_id" => "PL5uUen04IQNlXgsP0RTwak6fxHbVL8ovW",
                "name" => "Performance and BMW Tate Live",
                "description" => "BMW Tate Live is a series of innovative live performances and events at Tate.",
                'poster_url' => "https://i.ytimg.com/vi/7ab5w5iIfAI/sddefault.jpg"
            ],
            [
                "youtube_id" => "PLhuEyf1go4nUmbJO-ZF8b3877WxcGF53E",
                "name" => "\"Artist to Artist\" | An Art21 Digital Series",
                "description" => "\"Artist to Artist\" is a digital film series featuring contemporary visual artists in conversation with their peers, discussing the inspirations and passions that drive their processes. Each film follows a single artist as he or she engages with other artists in a shared exhibition setting.",
                'poster_url' => "https://i.ytimg.com/vi/FuUKxzX_-BI/sddefault.jpg"
            ],
            [
                "youtube_id" => "PL5uUen04IQNktzf6JMMzE1XMnqAK81xrY",
                "name" => "\"Artist to Artist\" | An Art21 Digital Series",
                "description" => "No description",
                'poster_url' => "https://i.ytimg.com/vi/lHBm8_ooPVo/sddefault.jpg"
            ]
        ];

        for ($i = 0; $i < count($shows); $i++) {
            $show = [
                'name' => $shows[$i]['name'],
                'description' => $shows[$i]['description'],
                'youtube_id' => $shows[$i]['youtube_id'],
                'poster_url' => $shows[$i]['poster_url']
            ];

            Media::create($show);
        }
    }
}
