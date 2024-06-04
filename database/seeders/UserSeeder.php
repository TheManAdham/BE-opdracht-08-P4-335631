<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Venco', 'contact_person' => 'Bert van Linge', 'email' => 'venco@example.com', 'password' => Hash::make('password'), 'contact_id' => 1, 'number' => 'L1029384719', 'mobile' => '06-28493827'],
            ['name' => 'Astra Sweets', 'contact_person' => 'Jasper del Monte', 'email' => 'astrasweets@example.com', 'password' => Hash::make('password'), 'contact_id' => 2, 'number' => 'L1029284315', 'mobile' => '06-39398734'],
            ['name' => 'Haribo', 'contact_person' => 'Sven Stalman', 'email' => 'haribo@example.com', 'password' => Hash::make('password'), 'contact_id' => 3, 'number' => 'L1029324748', 'mobile' => '06-24383291'],
            ['name' => 'Basset', 'contact_person' => 'Joyce Stelterberg', 'email' => 'basset@example.com', 'password' => Hash::make('password'), 'contact_id' => 4, 'number' => 'L1023845773', 'mobile' => '06-48293823'],
            ['name' => 'De Bron',  'contact_person' => 'Remco Veenstra', 'email' => 'debron@example.com', 'password' => Hash::make('password'), 'contact_id' => 5, 'number' => 'L1023857736', 'mobile' => '06-34291234'],
            ['name' => 'Quality Street',  'contact_person' => 'Johan Nooij', 'email' => 'qualitystreet@example.com', 'password' => Hash::make('password'), 'contact_id' => 6, 'number' => 'L1029234586', 'mobile' => '06-23458456'],
            ['name' => 'Hom Ken Food', 'contact_person' => 'Hom Ken', 'email' => 'homkenfood@example.com', 'password' => Hash::make('password'), 'contact_id' => null, 'number' => 'L1029234599', 'mobile' => '06-23458477'],
        ]);
    }
}
