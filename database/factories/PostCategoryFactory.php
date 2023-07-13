<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PostCategory;
use App\Models\PostParentCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostCategory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'title_ar' => $this->faker->word,
            'title_fr' => $this->faker->word,
            'slug' => $this->faker->slug,
            'post_category_id'=>PostParentCategory::first()?->id ?? PostParentCategory::factory()
        ];
    }
}
