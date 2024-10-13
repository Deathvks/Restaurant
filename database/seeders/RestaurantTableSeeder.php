<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')-> insert([
            ['name' => 'Arroz', 'price' => 4.50],
            ['name' => 'Macarrones', 'price' => 4.50],
        ]);
    }
}
