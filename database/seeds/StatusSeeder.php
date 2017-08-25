<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status1 = \App\Status::create(['content' => 'Hari ini #belajar Laravel 5!', 'user_id' => 1]);
        $status2 = \App\Status::create(['content' => 'Cari framework PHP? Laravel aja..', 'user_id' => 2]);
    }
}
