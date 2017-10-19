<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProduct;
use App\Product;
use App\ProductCategory;


class SearchController extends Controller
{
	public function search($searchKey)
    {
		$products = Product::search($searchKey)->get();
		$searchWord = '$searchKey';
		return view('search',['searchWord'=>$searchKey], compact('products'));
    }
}
