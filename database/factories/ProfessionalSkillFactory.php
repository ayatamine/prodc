<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Professional;
use App\Models\ProfessionalSkill;
use App\Models\Skill;

class ProfessionalSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProfessionalSkill::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'professional_id' => Professional::factory(),
            'skill_id' => Skill::factory(),
        ];
    }
}
