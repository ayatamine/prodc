<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FAQController
 */
class FAQControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $fAQs = FAQ::factory()->count(3)->create();

        $response = $this->get(route('f-a-q.index'));

        $response->assertOk();
        $response->assertViewIs('faq.index');
        $response->assertViewHas('faqs');
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $fAQ = FAQ::factory()->create();

        $response = $this->get(route('f-a-q.show', $fAQ));

        $response->assertOk();
        $response->assertViewIs('faq.show');
    }
}
