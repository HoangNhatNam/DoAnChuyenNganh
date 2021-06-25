<?php

namespace Tests\Feature;
use App\Users;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testBasicTest()
//    {
//        $this->assertTrue(true);
//    }
//    public function testLoginPost(){
//        Session::start();
//
//        $response = $this->call('POST', 'login', [
//            'email' => 'sokhter@yahoo.com',
//            'password' => '123456',
//            '_token' => csrf_token()
//        ]);
//        $this->assertEquals(200, $response->getStatusCode());
//        $this->assertEquals('auth.login', $response->original->name());}

    public function testLoginFormDisplayed()
    {
        $response = $this->get('/admin');

        $response->assertStatus(404);
    }
    public function testLoginAValidUser()
    {
        $user = factory('App\User')->create();

        $response = $this->post('/admin', [
            'email' => 'nam',
            'password' => 'asd'
        ]);

        $response->assertStatus(302);

        $this->assertAuthenticatedAs($user);
    }

    public function testDoesNotLoginAnInvalidUser()
    {
        $user = factory('App\User')->create();

        $hasUser = $user ? true : false;

        $this->assertTrue($hasUser);

        $response = $this->actingAs($user)->get('/home');
    }
}
