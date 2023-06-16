<?php

namespace Database\Factories;

use App\Models\Badge;
use App\Models\Language;
use App\Models\Langugage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BadgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Badge::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'icon' => $this->faker->text,
            'language_id' => Language::first()->id ?? Language::factory(),
        ];
    }
}
