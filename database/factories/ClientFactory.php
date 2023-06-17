<?php

namespace Database\Factories;

use App\Models\Job;
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
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'password' => $this->faker->password,
            'nationality' => $this->faker->word,
            'email_verified_at' => $this->faker->dateTime(),
            'profile_photo_path' => $this->faker->word,
            'account_stattus' => $this->faker->boolean,
            'is_reported' => $this->faker->boolean,
            'country_id' => Country::first()?->id ?? Country::factory(),
            'city' => $this->faker->city,
            'job_id' => Job::first()?->id ?? Job::factory(),
            'points' => $this->faker->numberBetween(-1000, 1000),
        ];
    }
}
