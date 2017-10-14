<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProfileController extends Controller
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
    public function showProfile()
    {
        return view('profile');
    }

}
