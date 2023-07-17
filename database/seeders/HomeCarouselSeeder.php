<?php

namespace Database\Seeders;

use App\Models\HomeCarousel;
use Illuminate\Database\Seeder;

class HomeCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeCarousel::factory()->count(5)->create();
    }
}
