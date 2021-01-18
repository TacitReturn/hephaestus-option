<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * HTTP request test to landing page.
     * @test
     * @return void
     */
    public function test_can_get_landing()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     *  HTTP request test to about-us page.
     * @test
     * @return void
     */
    public function test_can_get_about()
    {
        $response = $this->get('/about-us');

        $response->assertStatus(200);
    }

    /**
     * HTTP request test to contact-us page.
     * @test
     * @return void
     */
    public function test_can_get_contact()
    {
        $response = $this->get('/contact-us');

        $response->assertStatus(200);
    }
}
