<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 4; $i++) { 
            DB::table('informations')->insert([

                'title' => 'title',
                'menu' => 'menu1'
            ]);
        }
    }
}
