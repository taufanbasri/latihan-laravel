<?php

use Illuminate\Database\Seeder;
use App\Preference;

class PreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $preference1 = Preference::create(['user_id' => 1, 'country' => 'ID', 'currency' => 'IDR', 'subscribe_mailing_list' => 1]);
        $preference2 = Preference::create(['user_id' => 2, 'country' => 'MY', 'currency' => 'MYR', 'subscribe_mailing_list' => 0]);
        $preference2 = Preference::create(['user_id' => 3, 'country' => 'SG', 'currency' => 'SGD', 'subscribe_mailing_list' => 1]);
    }
}
