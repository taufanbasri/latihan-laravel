<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course1 = \App\Course::create(['title' => 'Kemampuan Menulis Dasar', 'units' => 3, 'rooms' => 'B13']);
        $course2 = \App\Course::create(['title' => 'Menggambar Manga Level 1', 'units' => 2, 'rooms' => 'A10']);
        $course3 = \App\Course::create(['title' => 'Mewarnai Manga Level 1', 'units' => 2, 'rooms' => 'A01']);
    }
}
