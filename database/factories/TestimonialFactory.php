<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Testimonial;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'comment' => $this->faker->text,
            'image' => $this->faker->word,
            'commenter_name' => $this->faker->word,
            'commenter_position' => $this->faker->word,
        ];
    }
}
