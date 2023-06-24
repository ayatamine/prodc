<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Str;
use App\Models\Professional;
use App\Models\ProfessionalCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'user_id'=>User::factory(),
            'account_type' => $this->faker->randomElement(["freelancer","company_single_person","company_multiple_person"]),
            'company_id' => ProfessionalCompany::first()?->id ?? ProfessionalCompany::factory(),
            'is_closed_tomporary' => $this->faker->boolean,
            'employment_rate' => $this->faker->randomNumber(3),
            'work_days' => '{}',
            'website_url' => $this->faker->url,
            'commercial_register_no' => $this->faker->word,
            'swear_on_ethiks' => $this->faker->boolean,
            'is_giving_promotions' => $this->faker->boolean,
            'has_service_after_sale' => $this->faker->boolean,
            'accept_installment_sale' => $this->faker->boolean,
        ];
    }
}
