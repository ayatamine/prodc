<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Package;

class PackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Package::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->randomElement(["free"]),
            'commission' => $this->faker->numberBetween(-10000, 10000),
            'features' => $this->faker->text,
            'duration_in_months' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->boolean,
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
