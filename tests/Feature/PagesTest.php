<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_landing()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_get_about()
    {
        $response = $this->get('/about-us');

        $response->assertStatus(200);
    }

    public function test_can_get_contact()
    {
        $response = $this->get('/contact-us');

        $response->assertStatus(200);
    }
}
