<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text,
            'is_open' => $this->faker->boolean,
            'duration' => $this->faker->numberBetween(0, 100),
            'timeline_point' => $this->faker->randomElement(["pending","published","processing","finished"]),
            'min_budget' => $this->faker->randomFloat(0, 0, 999999.),
            'max_budget' => $this->faker->randomFloat(0, 0, 999999.),
            'real_amount' => $this->faker->randomFloat(0, 0, 999999.),
            'professional_id' => null,
            'client_id' => Client::first()?->id ?? Client::factory(),
        ];
    }
}
