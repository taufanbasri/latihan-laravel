<?php

use Illuminate\Database\Seeder;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video1 = \App\Video::create(['title' => 'Method setUp dalam PHPUnit', 'length' => '00:08:25', 'filename' => '57a8d3f2.mp4']);
        $video2 = \App\Video::create(['title' => 'Interview dengan founder Wunderlist', 'length' => '00:14:05', 'filename' => '22dc1f05.mp4']);
    }
}
