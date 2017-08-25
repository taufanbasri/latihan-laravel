<?php

use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quote1 = App\Quote::create(['author' => 'Mario Teguh', 'type' => 'inspiration', 'quote' => 'Jadilah pria baik-baik.']);
        $quote2 = App\Quote::create(['author' => 'Andrie Wongso', 'type' => 'inspiration', 'quote' => '1000 orang tidak percaya keamampuan kita, tidak masalah']);
        $quote3 = App\Quote::create(['author' => 'Bob Sadino', 'type' => 'inspiration', 'quote' => 'Bergayalah sesuai isi dompetmu.']);
    }
}
