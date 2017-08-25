<?php

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order1 = \App\Order::create(['customer' => 'Doni', 'tipe' => 'coklat-kacang', 'jumlah' => 3, 'alamat' => 'Jl. Garuda 20 New York']);
        $order2 = \App\Order::create(['customer' => 'Rini', 'tipe' => 'keju', 'jumlah' => 2, 'alamat' => 'Jl. Juara 12 New York']);
    }
}
