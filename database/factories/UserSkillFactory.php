<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Skill;
use App\Models\UserSkill;
use Illuminate\Support\Str;
use App\Models\Professional;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserSkill::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::first()?->id ?? User::factory(),
            'skill_id' => $this->faker->randomElement(Skill::pluck('id')),
        ];
    }
}
