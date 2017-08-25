<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person1 = \App\Person::create(['name' => 'Budi', 'birth_date' => '1971-03-10']);
        $person2 = \App\Person::create(['name' => 'Deni', 'birth_date' => '1992-08-10', 'parent_id' => 1]);
        $person3 = \App\Person::create(['name' => 'Dadang', 'birth_date' => '1993-09-02', 'parent_id' => 1]);
    }
}
