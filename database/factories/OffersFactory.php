<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Professional;
use App\Models\Project;
use App\Models\offers;

class OffersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offers::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'professional_id' => Professional::factory(),
            'project_id' => Project::factory(),
            'delivery_duration' => $this->faker->numberBetween(-10000, 10000),
            'content' => $this->faker->paragraphs(3, true),
            'is_reported' => $this->faker->boolean,
        ];
    }
}
