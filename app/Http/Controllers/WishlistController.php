<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WishlistController extends Controller
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
    public function showWishlist()
    {
        return view('wishlist');
    }

}
