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
        for ($i=0; $i < 10; $i++) { 
            DB::table('sliders')->insert([
                'image' => Str::random(10),
                'effect' => Str::random(10),
                'title' => Str::random(10),
                'detail' => Str::random(10),
                'url' => Str::random(10)
            ]);
        }
    }
}
