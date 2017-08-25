<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photo1 = \App\Photo::create(['title' => 'Buku Pranikah Recomended', 'filename' => 'BVOMDFeE2.jpg', 'user_id' => 1]);
        $photo1 = \App\Photo::create(['title' => 'Memulai Hidup Baru', 'filename' => 'VN74aUmLD.jpg', 'user_id' => 2]);
        $photo1 = \App\Photo::create(['title' => 'Rumah Impian', 'filename' => 'HVpdKBe.jpg', 'user_id' => 2]);
    }
}
