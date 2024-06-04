<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('product_allergies')->insert([
            ['product_id' => 1, 'allergy_id' => 2],
            ['product_id' => 1, 'allergy_id' => 1],
            ['product_id' => 1, 'allergy_id' => 3],
            ['product_id' => 3, 'allergy_id' => 4],
            ['product_id' => 6, 'allergy_id' => 5],
            ['product_id' => 9, 'allergy_id' => 2],
            ['product_id' => 9, 'allergy_id' => 5],
            ['product_id' => 10, 'allergy_id' => 2],
            ['product_id' => 12, 'allergy_id' => 4],
            ['product_id' => 13, 'allergy_id' => 1],
            ['product_id' => 13, 'allergy_id' => 4],
            ['product_id' => 13, 'allergy_id' => 5],
            ['product_id' => 14, 'allergy_id' => 5],
        ]);
    }
}
