<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ['id' => 1, 'street' => 'Van Gilslaan', 'housenumber' => 34, 'zipcode' => '1045CB', 'city' => 'Hilvarenbeek'],
            ['id' => 2, 'street' => 'Den Dolderpad', 'housenumber' => 2, 'zipcode' => '1067RC', 'city' => 'Utrecht'],
            ['id' => 3, 'street' => 'Fredo Raalteweg', 'housenumber' => 257, 'zipcode' => '1236OP', 'city' => 'Nijmegen'],
            ['id' => 4, 'street' => 'Bertrand Russellhof', 'housenumber' => 21, 'zipcode' => '2034AP', 'city' => 'Den Haag'],
            ['id' => 5, 'street' => 'Leon van Bonstraat', 'housenumber' => 213, 'zipcode' => '145XC', 'city' => 'Lunteren'],
            ['id' => 6, 'street' => 'Bea van Lingenlaan', 'housenumber' => 234, 'zipcode' => '2197FG', 'city' => 'Sint Pancras'],
        ]);
    }
}
