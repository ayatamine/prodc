<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'username' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => bcrypt('password'),
            'email_verified_at' => $this->faker->dateTime(),
            'phone_number' => $this->faker->phoneNumber,
            'profile_photo_path' => $this->faker->word,
            'bio' => $this->faker->text,
            'country_id' => Country::first()?->id ?? Country::factory(),
            'birth_date' => $this->faker->date(),
            'account_status' => $this->faker->boolean,
            'is_reported' => $this->faker->boolean,
            'is_account_verified' => $this->faker->boolean,
            'phone_verified_at' => $this->faker->dateTime(),
            'gender' => $this->faker->randomElement(["male","female"]),
            'oauth_taken' => null,
            'city' => $this->faker->city,
            'job_id' => Job::factory(),
            'last_seen' => $this->faker->dateTime(),
            'location' => '{}',
            'is_subscribed_to_newsletter' => $this->faker->boolean,

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
