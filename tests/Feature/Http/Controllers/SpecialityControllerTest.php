<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SpecialityController
 */
class SpecialityControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $specialities = Speciality::factory()->count(3)->create();

        $response = $this->get(route('speciality.index'));

        $response->assertOk();
        $response->assertViewIs('speciality.index');
        $response->assertViewHas('specialities');
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $speciality = Speciality::factory()->create();

        $response = $this->get(route('speciality.show', $speciality));

        $response->assertOk();
        $response->assertViewIs('speciality.show');
    }
}
