<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Country::create([
        'name' => 'france',
        // 'code' => '',
        'phone_code' => '+33',
        'flag' => 'france.png',
        'is_active' => true,
       ]);
       Country::create([
        'name' => 'Belgique',
        // 'code' => '',
        'phone_code' => '+32',
        'flag' => 'Belgique.png',
        'is_active' => true,
       ]);
       Country::create([
        'name' => 'Holand',
        // 'code' => '',
        'phone_code' => '+31',
        'flag' => 'france.png',
        'is_active' => true,
       ]);
    }
}
