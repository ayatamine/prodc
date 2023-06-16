<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Professional;
use App\Models\ProfessionalSubscription;
use App\Models\SubscriptionPlan;

class ProfessionalSubscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProfessionalSubscription::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'professional_id' => Professional::factory(),
            'subscription_plan_id' => SubscriptionPlan::factory(),
            'start_date' => $this->faker->dateTime(),
        ];
    }
}
