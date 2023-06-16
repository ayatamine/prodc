<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Language::factory()->count(5)->create();
        Language::create([
            'name' => 'Arabic',
            'label' => 'ar',
            'file' => 'ar.php',
            'direction' => 'ltr',
            'status' => 1,
        ]);
        
        Language::create([
            'name' => 'English',
            'label' => 'en',
            'file' => 'en.php',
            'direction' => 'ltr',
            'status' => 1,
        ]);
       
        Language::create([
            'name' => 'Francais',
            'label' => 'fr',
            'file' => 'fr.php',
            'direction' => 'ltr',
            'status' => 1,
        ]);
    }
}
