<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Client;
use App\Models\Professional;
use App\Models\Project;
use App\Models\ProjectReview;

class ProjectReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectReview::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::factory(),
            'professional_id' => Professional::factory(),
            'project_id' => Project::factory(),
            'comment' => $this->faker->text,
            'is_approved' => $this->faker->boolean,
            'is_reported' => $this->faker->boolean,
            'ratings' => '{}',
        ];
    }
}
