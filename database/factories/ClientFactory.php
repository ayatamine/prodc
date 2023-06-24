<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use App\Models\Client;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'points' => $this->faker->numberBetween(-1000, 1000),
        ];
    }
}
