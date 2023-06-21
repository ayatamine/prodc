<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Country;
use App\Models\Job;
use App\Models\Professional;
use App\Models\ProfessionalCompany;

class ProfessionalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Professional::class;

    /**
     * Define the model's default state.
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
            'account_type' => $this->faker->randomElement(["freelancer","company_single_person","company_multiple_person"]),
            'company_id' => ProfessionalCompany::first()?->id ?? ProfessionalCompany::factory(),
            'country_id' => Country::first()?->id ?? Country::factory(),
            'birth_date' => $this->faker->date(),
            'account_status' => $this->faker->boolean,
            'is_reported' => $this->faker->boolean,
            'is_account_verified' => $this->faker->boolean,
            'phone_verified_at' => $this->faker->dateTime(),
            'gender' => $this->faker->randomElement(["male","female"]),
            'oauth_taken' => null,
            'is_closed_tomporary' => $this->faker->boolean,
            'city' => $this->faker->city,
            'job_id' => Job::factory(),
            'employment_rate' => $this->faker->randomNumber(3),
            'work_days' => '{}',
            'last_seen' => $this->faker->dateTime(),
            'location' => '{}',
            'website_url' => $this->faker->url,
            'commercial_register_no' => $this->faker->word,
            'is_subscribed_to_newsletter' => $this->faker->boolean,
            'swear_on_ethiks' => $this->faker->boolean,
            'is_giving_promotions' => $this->faker->boolean,
            'has_service_after_sale' => $this->faker->boolean,
            'accept_installment_sale' => $this->faker->boolean,
        ];
    }
}
