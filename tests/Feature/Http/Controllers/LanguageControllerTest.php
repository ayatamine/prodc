<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Language;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\LanguageController
 */
class LanguageControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $languages = Language::factory()->count(3)->create();

        $response = $this->get(route('language.index'));

        $response->assertOk();
        $response->assertViewIs('language.index');
        $response->assertViewHas('laguages');
    }
}
