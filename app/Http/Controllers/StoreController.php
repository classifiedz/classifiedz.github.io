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

        // get rating from database.
        return view('yourstore', [
            'user' => $user
        ]);
    }

    public function showYourStore()
    {
        $user = Auth::user();

        return view('yourstore', [
            'user' => $user
        ]);
    }

    /**
     * Like store
     *
     * @return \Illuminate\Http\Response
     */
    public function likeStore($username)
    {
      User::where('username', $username)->increment('likes');
      return $this->showStore($username);
    }

    /**
     * Like store
     *
     * @return \Illuminate\Http\Response
     */
    public function dislikeStore($username)
    {
      User::where('username', $username)->increment('dislikes');
      return $this->showStore($username);
    }

}
