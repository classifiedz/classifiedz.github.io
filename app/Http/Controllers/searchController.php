<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProduct;
use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;


class SearchController extends Controller
{
	public function search($searchKey)
    {
		$products = Product::search($searchKey)->get();
		$searchWord = '$searchKey';
		return view(
			'search',
			[
				'searchWord'=>$searchKey
			],
			compact('products'));
    }
	public function searchCategory($searchKey, ProductCategory $category){
		$products = Product::search($searchKey)->get();
		//$products = Product::search($searchKey)->where('category_id',$category->id)->get(); //isnt checking children

		return view(
			'search',
			[
				'searchWord'=>$searchKey,
				'category' => $category,
			],
			compact('products'));
	}
}
