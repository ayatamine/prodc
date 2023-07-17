<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\HomeCarousel;

class HomeCarouselFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomeCarousel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'image' => $this->faker->word,
            'text' => $this->faker->text,
            'is_visible' => $this->faker->boolean,
        ];
    }
}
