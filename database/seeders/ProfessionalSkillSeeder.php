<?php

namespace Database\Seeders;

use App\Models\ProfessionalSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionalSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfessionalSkill::factory(3)->create();
    }
}
