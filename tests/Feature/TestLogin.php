<?php

namespace Tests\Feature;

use App\Certificate;
use App\Level;
use App\User;
use App\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Laravel\Dusk\Chrome;


class TestLogin extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoginFormDisplayed()
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
    }

    public function testHomeFormDisplayed()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function testUserFormDisplayed()
    {
        $response = $this->get('/admin/users');

        $response->assertStatus(200);
    }

    public function testLoginAValidUser()
    {
        $response = $this->post('/admin', [
            'email' => 'nam@gmail.com',
            'password' => 'nam'
        ]);

        $response->assertStatus(302)
            ->assertRedirect('/home');
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
    public function testDatabase()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'nam@gmail.com'
        ]);
    }

    public function test_count_user()
    {
        $this->assertCount(3,Users::all());
    }


}
