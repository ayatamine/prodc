<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Attachement;

class AttachementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachement::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->word,
            'attacheable_type' => $this->faker->word,
            'attacheable_id' => $this->faker->randomNumber(),
        ];
    }
}
