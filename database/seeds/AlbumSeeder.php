<?php

use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artist1 = \App\Album::create(['artist_id' => 1, 'title' => 'Parachutes', 'released' => '2000-07-10']);
        $artist2 = \App\Album::create(['artist_id' => 1, 'title' => 'Ghost Stories', 'released' => '2014-04-16']);
        $artist3 = \App\Album::create(['artist_id' => 2, 'title' => 'True', 'released' => '2013-09-13']);
    }
}
