<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Purchase;

class PurchaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Purchase::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->text,
            'amount' => $this->faker->randomFloat(0, 0, 9999999999.),
            'client_id' => $this->faker->randomNumber(),
            'professional_id' => $this->faker->randomNumber(),
        ];
    }
}
