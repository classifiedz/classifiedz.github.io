<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //THIS IS HOW TO GET DATA FROM DATABASE AND PASS IT TO THE VIEW, Make sure that db is set up locally for this to work
        $products = Product::all();
        return view('index', ['products' => $products]);

        /*return view('index');*/
    }
}
