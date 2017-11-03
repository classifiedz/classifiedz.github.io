<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteResponseTest extends TestCase
{
    /**
     * Testing homepage.
     *
     * @return void
     */
    public function testHomepage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test privacy page.
     *
     * @return void
     */
    public function testPrivacyPage()
    {
        $response = $this->get('/privacy');

        $response->assertStatus(200);
    }

    /**
     * Test posting policy page.
     *
     * @return void
     */
    public function testPostingPolicyPage()
    {
        $response = $this->get('/postingpolicy');

        $response->assertStatus(200);
    }

    /**
     * Test refund page.
     *
     * @return void
     */
    public function testRefundPage()
    {
        $response = $this->get('/refund');

        $response->assertStatus(200);
    }

    /**
     * Test terms page.
     *
     * @return void
     */
    public function testTermsPage()
    {
        $response = $this->get('/terms');

        $response->assertStatus(200);
    }

    /**
     * Test wishlist page, making sure that a redirect occurs because you need 
     * to be authenticated to access this page.
     *
     * @return void
     */
    public function testWishlistRedirectAuthentication()
    {
        $response = $this->get('/wishlist');

        $response->assertStatus(302);
    }

    /**
     * Test create ad page, making sure that a redirect occurs because you need 
     * to be authenticated to access this page.
     *
     * @return void
     */
    public function testCreateAdRedirectAuthentication()
    {
        $response = $this->get('/ad/create');

        $response->assertStatus(302);
    }

    /**
     * Test profile page, making sure that a redirect occurs because you need 
     * to be authenticated to access this page.
     *
     * @return void
     */
    public function testProfilePageRedirectAuthentication()
    {
        $response = $this->get('/profile');

        $response->assertStatus(302);
    }

    /**
     * Test edit profile page, making sure that a redirect occurs because you need 
     * to be authenticated to access this page.
     *
     * @return void
     */
    public function testEditProfileRedirectAuthentication()
    {
        $response = $this->get('/profile/edit');

        $response->assertStatus(302);
    }


     /**
     * Testing non existent page.
     *
     * @return void
     */
     public function testNonExistentPage()
     {
        $response = $this->get('/THIS/ROUTE/DOES/NOT/EXIST');

        $response->assertStatus(404);
    }
}
