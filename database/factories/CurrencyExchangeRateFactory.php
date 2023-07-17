<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Currency;
use App\Models\CurrencyExchangeRate;

class CurrencyExchangeRateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CurrencyExchangeRate::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'from_currency_id' => Currency::factory(),
            'to_currency_id' => Currency::factory(),
            'exchange_rate' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
