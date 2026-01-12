<?php

namespace Tests\Feature;

use Tests\TestCase;

class WelcomeTest extends TestCase
{
    public function test_welcome_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}