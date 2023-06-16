<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Badge;
use App\Models\Country;
use App\Models\FAQ;
use App\Models\Job;
use App\Models\Skill;
use App\Models\Language;
use App\Models\Project;
use App\Models\Speciality;
use App\Models\Work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        if(!Language::count()) $this->call(LanguageSeeder::class);
        if(!Skill::count()) $this->call(SkillSeeder::class);
        if(!Speciality::count()) $this->call(SpecialitySeeder::class);
        if(!FAQ::count()) $this->call(FAQSeeder::class);
        if(!Badge::count()) $this->call(BadgeSeeder::class);
        if(!Project::count()) $this->call(ProjectSeeder::class);
        if(!Job::count()) $this->call(JobSeeder::class);
        if(!Work::count()) $this->call(WorkSeeder::class);
        if(!Country::count()) $this->call(CountrySeeder::class);
    }
}
