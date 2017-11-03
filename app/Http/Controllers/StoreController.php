<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\User;

class StoreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showStore($username)
    {
        $user = User::where('username', $username)->firstOrFail();

        $title = "$user->username's Store";

        if (Auth::check() && Auth::user()->id == $user->id) {
            $title = "My Store";
        }

        return view('yourstore', [
            'user' => $user,
            'title' => $title
        ]);
    }

    public function showYourStore()
    {
        $user = Auth::user();
        return view('yourstore', [
            'user' => $user,
            'title' => 'My Store'
        ]);
    }

}

