<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Award;
use App\Models\Client;
use App\Models\ClientAward;

class ClientAwardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientAward::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::factory(),
            'award_id' => Award::factory(),
            'month' => $this->faker->randomDigitNotNull,
            'year' => $this->faker->year(),
        ];
    }
}
