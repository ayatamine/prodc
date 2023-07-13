<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Language;
use App\Models\Post;
use App\Models\Postcategory;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraphs(3, true),
            'tags' => $this->faker->text,
            'keywords' => $this->faker->text,
            'meta_seo' => $this->faker->word,
            'is_publishable' => $this->faker->boolean,
            'language_id' => Language::factory(),
            'post_category_id' => Postcategory::factory(),
            'user_id' => User::first()->id ?? User::factory(),
            'image' => $this->faker->imageUrl(640, 480, 'articles', true),
        ];
    }
}
