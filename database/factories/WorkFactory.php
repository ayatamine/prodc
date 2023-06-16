<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Job;
use App\Models\Professional;
use App\Models\Work;

class WorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Work::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug,
            'image' => $this->faker->text,
            'views_count' => $this->faker->numberBetween(-10000, 10000),
            'link' => $this->faker->word,
            'status' => $this->faker->boolean,
            'professional_id' => Professional::first()?->id ?? Professional::factory(),
            'job_id' => Job::first()?->id ?? Job::factory(),
            'price' => $this->faker->randomFloat(0, 0, 9999999999.),
        ];
    }
}
