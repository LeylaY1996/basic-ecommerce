<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


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
                'image' => 'https://www.civilim.com/productimages/395139/small/8681817570287.jpg',
                'name' => Str::random(10),
                'price' => 100.9,
                'rating' => 2,
                'basket_status' =>0,
            ]);
        }
    }
}
