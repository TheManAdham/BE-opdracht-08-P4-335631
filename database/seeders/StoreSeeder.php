<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('stores')->insert([
            ['id' => 1, 'product_id' => 1, 'unit' => 5, 'amount_available' => 453],
            ['id' => 2, 'product_id' => 2, 'unit' => 2.5, 'amount_available' => 400],
            ['id' => 3, 'product_id' => 3, 'unit' => 5, 'amount_available' => 1],
            ['id' => 4, 'product_id' => 4, 'unit' => 1, 'amount_available' => 800],
            ['id' => 5, 'product_id' => 5, 'unit' => 3, 'amount_available' => 234],
            ['id' => 6, 'product_id' => 6, 'unit' => 2, 'amount_available' => 345],
            ['id' => 7, 'product_id' => 7, 'unit' => 1, 'amount_available' => 795],
            ['id' => 8, 'product_id' => 8, 'unit' => 10, 'amount_available' => 233],
            ['id' => 9, 'product_id' => 9, 'unit' => 2.5, 'amount_available' => 123],
            ['id' => 10, 'product_id' => 10, 'unit' => 3, 'amount_available' => null],
            ['id' => 11, 'product_id' => 11, 'unit' => 2, 'amount_available' => 367],
            ['id' => 12, 'product_id' => 12, 'unit' => 1, 'amount_available' => 467],
            ['id' => 13, 'product_id' => 13, 'unit' => 5, 'amount_available' => 20],
        ]);
        }
}
