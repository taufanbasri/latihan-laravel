<?php

use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studio1 = App\Studio::create(['name' => 'Pixar', 'founded_at' => '1986-02-03']);
        $studio2 = App\Studio::create(['name' => 'Dreamworks Animation', 'founded_at' => '2004-10-27']);
    }
}
