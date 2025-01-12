<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            'name' => "Iphone 16",
            'description' => "Mobile Phone Apple",
            'amount' => 980
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 15",
            'description' => "Mobile Phone Apple",
            'amount' => 750
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 14",
            'description' => "Mobile Phone Apple",
            'amount' => 650
        ]);
    }
}
