<?php

use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song1 = \App\Song::create(['album_id' => 1, 'title' => 'Yellow', 'length' => '00:04:29']);
        $song2 = \App\Song::create(['album_id' => 1, 'title' => 'Don\'t Panic', 'length' => '00:02:17']);
        $song3 = \App\Song::create(['album_id' => 2, 'title' => 'Magic', 'length' => '00:04:45']);
        $song4 = \App\Song::create(['album_id' => 2, 'title' => 'A Sky Full of Stars', 'length' => '00:04:28']);
        $song5 = \App\Song::create(['album_id' => 3, 'title' => 'Wake Me Up', 'length' => '00:04:09']);
    }
}
