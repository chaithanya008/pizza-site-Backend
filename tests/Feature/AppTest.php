<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->getJson('/api/menu'); // Call /api/menu
        $response
            ->assertStatus(200) // Check response status is 200 or not
            ->assertJson([
                'data' => true // Check response JSON must include `data` key
            ]);
    }
}
