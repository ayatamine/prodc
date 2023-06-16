<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SkillController
 */
class SkillControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $skills = Skill::factory()->count(3)->create();

        $response = $this->get(route('skill.index'));

        $response->assertOk();
        $response->assertViewIs('skill.index');
        $response->assertViewHas('skills');
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $skill = Skill::factory()->create();

        $response = $this->get(route('skill.show', $skill));

        $response->assertOk();
        $response->assertViewIs('skill.show');
    }
}
