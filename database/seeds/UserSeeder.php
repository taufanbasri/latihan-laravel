<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create(['email' => 'user1@mail.com', 'password' => bcrypt('123123')]);
        $user2 = User::create(['email' => 'user2@mail.com', 'password' => bcrypt('123123')]);
        $user3 = User::create(['email' => 'user3@mail.com', 'password' => bcrypt('123123')]);
    }
}
