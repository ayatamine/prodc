<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Work;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\WorkController
 */
class WorkControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $works = Work::factory()->count(3)->create();

        $response = $this->get(route('work.index'));

        $response->assertOk();
        $response->assertViewIs('work.index');
        $response->assertViewHas('skills');
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $work = Work::factory()->create();

        $response = $this->get(route('work.show', $work));

        $response->assertOk();
        $response->assertViewIs('work.show');
        $response->assertViewHas('job');
    }
}
