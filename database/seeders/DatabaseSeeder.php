<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FAQ;
use App\Models\Job;
use App\Models\Post;
use App\Models\Work;
use App\Models\Badge;
use App\Models\Skill;
use App\Models\Client;
use App\Models\Country;
use App\Models\Package;
use App\Models\Project;
use App\Models\Language;
use App\Models\Speciality;
use App\Models\Professional;
use Illuminate\Database\Seeder;
use App\Models\ProfessionalSkill;
use App\Models\PostParentCategory;

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
        if(!Job::count()) $this->call(JobSeeder::class);
        if(!FAQ::count()) $this->call(FAQSeeder::class);
        if(!Badge::count()) $this->call(BadgeSeeder::class);
        if(!Country::count()) $this->call(CountrySeeder::class);
        if(!Client::count()) $this->call(ClientSeeder::class);
        if(!Professional::count()) $this->call(ProfessionalSeeder::class);
        // if(!ProfessionalSkill::count()) $this->call(ProfessionalSkillSeeder::class);
        if(!Project::count()) $this->call(ProjectSeeder::class);
        if(!Work::count()) $this->call(WorkSeeder::class);
        if(!Package::count()) $this->call(PackageSeeder::class);
        if(!Package::count()) $this->call(PackageSeeder::class);
        if(!PostParentCategory::count()) $this->call(PostParentCategorySeeder::class);
        if(!Post::count()) $this->call(PostSeeder::class);
    }
}
