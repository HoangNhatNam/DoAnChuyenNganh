<?php

namespace Tests\Browser;

use App\Users;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAdminForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin')
                    ->assertSee('Username');
        });
    }
    public function testLogin()
    {
        $this->browse(function ($browser) {
            $browser->visit('/admin')
                ->type('email', 'nam@gmail.com')
                ->type('password', 'nam')
                ->press('submit')
                ->assertPathIs('/home');
        });
    }

    public function testPage()
    {
        $this->browse(function ($browser) {
            $browser->visit('/admin/users')
                ->click('#add')
                ->assertPathIs('/admin/users/create');
        });
    }

//    public function test1()
//    {
//        $this->browse(function ($browser) {
//            $browser->visit('/home')
//                ->click('#test')
//                ->pause(3000)
//                ->mouseover('.nav-item')
//                ->click('.nav-item')
//                ->dragRight('.nav-item',100)
//                ->dragLeft('.nav-item',200);
//        });
//    }

    public function testPort()
    {
        $this->browse(function ($browser) {
            $browser->visit('/home')
            ->assertPortIs('8000');
        });
    }

    public function testHost()
    {
        $this->browse(function ($browser) {
            $browser->visit('/home')
                ->assertHostIs('localhost');
        });
    }

    public function testCheckedRememberMe()
    {
        $this->browse(function ($browser) {
            $browser->visit('/admin')
                ->assertNotChecked('');
        });
    }

    public function testValueLogin()
    {
        $this->browse(function ($browser) {
            $browser->visit('/admin')
                ->assertValue('#login', 'submit');
        });
    }
}
