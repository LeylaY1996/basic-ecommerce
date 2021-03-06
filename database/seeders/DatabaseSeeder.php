<?php

namespace Database\Seeders;

use App\Http\Controllers\Api\ProductController;
use Illuminate\Database\Seeder;
use Illuminate\Notifications\Events\NotificationSent;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProductSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(NotificationSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(InformationSeeder::class);



    }
}
