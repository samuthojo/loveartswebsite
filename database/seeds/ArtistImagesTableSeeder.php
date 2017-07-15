<?php

use Illuminate\Database\Seeder;
use App\ArtistImage;

class ArtistImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all()->modelKeys();

        for ($i=1; $i < 19; $i++) {
            $image = [
                'url' => $i.".jpg",
                'user_id' => $users[rand(0,count($users) - 1)],
            ];
            ArtistImage::create($image);
        }
    }
}
