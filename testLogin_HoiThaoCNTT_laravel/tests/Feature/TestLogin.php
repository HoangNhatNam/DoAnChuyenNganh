<?php

namespace Tests\Feature;

use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestLogin extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginFormDisplayed()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testLoginAValidUser()
    {
//        $user = factory('App\User')->create();

        $response = $this->post('/', [
            'email' => 'namasdasd123@gmail.com',
            'password' => 'nam'
        ]);

        $response->assertStatus(302);

//        $this->assertAuthenticatedAs($user);
    }
    public function aVisitorCanAbleToLogin()
    {
        $user = factory('App\User')->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);
    }
    public function testLoginPost(){
        $response = $this->call('POST', '/', [
            'email' => 'nam',
            'password' => 'asd',
            '_token' => csrf_token()
        ]);
        $this->assertEquals(302, $response->getStatusCode());
//        $this->assertEquals('auth.login', $response->original->name());
    }
}
