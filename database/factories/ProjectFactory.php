<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Project;

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
            'duration' => $this->faker->numberBetween(-100000, 100000),
            'timeline_point' => $this->faker->randomElement(["pending","published","processing","finished"]),
            'min_budget' => $this->faker->randomFloat(0, 0, 9999999999.),
            'max_budget' => $this->faker->randomFloat(0, 0, 9999999999.),
            'real_amount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'professional_id' => $this->faker->randomNumber(),
            'client_id' => $this->faker->randomNumber(),
        ];
    }
}
