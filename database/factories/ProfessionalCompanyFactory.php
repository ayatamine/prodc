<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProfessionalCompany;

class ProfessionalCompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProfessionalCompany::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->word,
            'country' => $this->faker->country,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'field' => $this->faker->word,
            'website_url' => $this->faker->word,
            'presenter_name' => $this->faker->word,
            'presenter_phone_number' => $this->faker->word,
            'presenter_email' => $this->faker->word,
            'presenter_job' => $this->faker->word,
        ];
    }
}
