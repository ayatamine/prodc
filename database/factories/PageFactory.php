<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Laguage;
use App\Models\Page;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->word,
            'meta_title' => $this->faker->word,
            'meta_description' => $this->faker->word,
            'laguage_id' => Laguage::factory(),
        ];
    }
}
