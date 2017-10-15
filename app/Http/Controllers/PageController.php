<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
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
    public function privacyPage()
    {
        return view('privacy');
    }
    public function postingpolicyPage()
    {
        return view('postingpolicy');
    }
    public function refundPage()
    {
        return view('refund');
    }
    public function termsPage()
    {
        return view('terms');
    }


}
