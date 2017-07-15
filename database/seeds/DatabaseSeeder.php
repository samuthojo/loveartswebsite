<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PillarsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(InfosTableSeeder::class);
        $this->call(ArtistImagesTableSeeder::class);
        $this->call(MediaTableSeeder::class);
    }
}
