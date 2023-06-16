<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Job;

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
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'password' => $this->faker->password,
            'nationality' => $this->faker->word,
            'email_verified_at' => $this->faker->dateTime(),
            'profile_photo_path' => $this->faker->word,
            'account_stattus' => $this->faker->boolean,
            'is_reported' => $this->faker->boolean,
            'country_id' => $this->faker->word,
            'city' => $this->faker->city,
            'job_id' => Job::factory(),
            'points' => $this->faker->numberBetween(-1000, 1000),
        ];
    }
}
