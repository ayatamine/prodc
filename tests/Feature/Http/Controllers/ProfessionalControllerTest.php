<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Professional;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ProfessionalController
 */
class ProfessionalControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $professionals = Professional::factory()->count(3)->create();

        $response = $this->get(route('professional.index'));

        $response->assertOk();
        $response->assertViewIs('professional.index');
        $response->assertViewHas('professionals');
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $professional = Professional::factory()->create();

        $response = $this->get(route('professional.show', $professional));

        $response->assertOk();
        $response->assertViewIs('professional.show');
    }
}
