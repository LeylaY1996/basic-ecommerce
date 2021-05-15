<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('videos')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'url' => 'https://www.youtube.com/embed/tgbNymZ7vqY'
        ]);
    }
}
