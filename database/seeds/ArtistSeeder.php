<?php

use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artist1 = \App\Artist::create(['name' => 'Coldplay', 'genre' => 'Alternative Rock']);
        $artist2 = \App\Artist::create(['name' => 'Avicii', 'genre' => 'Electro House']);
    }
}
