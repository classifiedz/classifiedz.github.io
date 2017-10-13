<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;

class ProductCategoryController extends Controller
{
	public function show(ProductCategory $category)
	{
		$products = [];
		foreach ($category->products as $product1stTier) {
			array_push($products, $product1stTier);
		}

		if(!empty($category->children)){
			foreach ($category->children as $category2ndTier) {
				foreach ($category2ndTier->products as $product2ndTier) {
					array_push($products, $product2ndTier);
				}

				if(!empty($category2ndTier->children)){
					foreach ($category2ndTier->children as $category3rdTier) {
						foreach ($category3rdTier->products as $product3rdTier) {
							array_push($products, $product3rdTier);
						}
					}
				}
			}
		}

		return view('categoryPage', [
			'category' => $category,
			'products' => $products
		]);
	}
}
