<?php

namespace Database\Factories;

use App\Models\FAQ;
use App\Models\Language;
use App\Models\Langugage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FAQFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FAQ::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'question' => $this->faker->word,
            'answer' => $this->faker->text,
            'language_id' => Language::first()?->id ?? Language::factory(),
        ];
    }
}
