<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Language;
use App\Models\Speciality;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'status' => $this->faker->boolean,
            'speciality_id' => Speciality::first()?->id ?? Speciality::factory(),
            'language_id' => Language::first()?->id ?? Language::factory(),
        ];
    }
}
