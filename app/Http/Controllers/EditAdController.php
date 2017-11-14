<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class EditAdController extends Controller
{
    
    public function __construct()
    {

    }


    public function showEditAd()
    {
        return view('editAd');
    }
}