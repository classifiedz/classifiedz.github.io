<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfile;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEditprofile()
    {
        return view('editprofile');
    }

    public function updateProfile(UpdateProfile $request){
        if (!Auth::check()) {
            return redirect('/login');
        }

        Auth::user()->update($request->all());

        return redirect('/profile');
    }

}
