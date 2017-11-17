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
     * Login and logout test
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

    /**
     * Testing the register form
     *
     * @return void
     */
    public function testRegisterForm()
    {
        $user_created = false;

        $name = 'Mr Bean';
        $username = 'MrBean';
        $emailRegister = 'mr.bean@gmail.com';
        $passwordRegister = 'ABC123doremi29!';
        $passwordRegister_confirmation = $passwordRegister;

        $this->browse(function ($browser) use ($name, $username, $emailRegister, $passwordRegister, $passwordRegister_confirmation) {
            $browser->visit('/login')
                ->type('name', $name)
                ->type('username', $username)
                ->type('emailRegister', $emailRegister)
                ->type('passwordRegister', $passwordRegister)
                ->type('passwordRegister_confirmation', $passwordRegister_confirmation)
                ->press('Sign me up!')
                ->assertPathIs('/');
        });

        $user_found = User::where('username', $username)
                            ->where('email', $emailRegister)
                            ->first();

        if(isset($user_found)){
            $user_created = true;
        }

        $this->assertTrue($user_created);

        if($user_created) {
            $this->logout();
            $this->removeUser($user_found->id);
        }
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
