<?php

namespace Database\Seeders;

use App\Models\IntroCard;
use Illuminate\Database\Seeder;

class IntroCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IntroCard::factory()->count(5)->create();
    }
}
