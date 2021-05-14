<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Decimal;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 10; $i++) { 
            DB::table('products')->insert([
                'image' => Str::random(10),
                'name' => Str::random(10),
                'price' => 100.9,
                'rating' => 2,
                'basket_status' =>0,
            ]);
        }
    }
}
