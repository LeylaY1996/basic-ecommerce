<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 3; $i++) { 
            DB::table('sliders')->insert([
                'image' =>'images/special-bg.jpg',
                'effect' => 'Power3.easeInOut',
                'title' => Str::random(10),
                'detail' => Str::random(10),
                'url' => Str::random(10)
            ]);
        }
    }
}
