<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Language;
use App\Models\Speciality;

class SpecialityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Speciality::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'title_ar' => 'عنوان فئة'.random_int(2,5333),
            'title_fr' => $this->faker->sentence(4),
            'image' => $this->faker->word,
            'status' => $this->faker->boolean,
            'language_id' =>Language::first()?->id ?? Language::factory(),
        ];
    }
}
