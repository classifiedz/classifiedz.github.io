<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use App\User;

class AuthenticationTest extends DuskTestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLoginAndLogout()
    {
        $name = 'Mr Bean';
        $username = 'MrBean';
        $email = 'mr.bean@gmail.com';
        $password = 'password';

        $user = $this->createUser($name, $username, $email, $password);

        //Test login
        $this->login($email, $password);

        //Test logout
        $this->logout();

        $this->removeUser($user->id);
    }

    private function login($email, $password){
        $this->browse(function ($browser) use ($email, $password) {
            $browser->visit('/login')
                ->type('email', $email)
                ->type('password', $password)
                ->press('Login')
                ->assertPathIs('/');
        });
    }

    private function logout(){
        $this->browse(function ($browser) {
            $browser->visit('/')
                ->select('@profileDropdown', '@logoutLink')
                ->assertPathIs('/');
        });
    }

    private function createUser($name, $username, $email, $password){
        return User::create([
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
    }

    private function removeUser($user_id){
        User::destroy($user_id);
    }
}
