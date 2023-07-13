<?php

namespace Database\Seeders;

use App\Models\PostParentCategory;
use Illuminate\Database\Seeder;

class PostParentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostParentCategory::factory()->count(2)->create();
    }
}
