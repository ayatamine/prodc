<?php

namespace Database\Seeders;

use App\Models\Dhikr;
use Illuminate\Database\Seeder;

class DhikrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dhikr::factory()->count(5)->create();
    }
}
