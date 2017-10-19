<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteResponseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomepage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

     /**
     * A basic test example.
     *
     * @return void
     */
    public function testNonExistentPage()
    {
        $response = $this->get('/THIS/ROUTE/DOES/NOT/EXIST');

        $response->assertStatus(404);
    }
}
