<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;

class ProductCategoryController extends Controller
{
	public function show(ProductCategory $category, Request $request)
	{
		$sortBy_column = null;
        $orderBy = null;

        switch ($request->query('sortBy')) {
            case 'oldestFirst':
            $sortBy_column = 'created_at';
            $orderBy = 'asc';
            break;
            case 'cheapestFirst':
            $sortBy_column = 'price';
            $orderBy = 'asc';
            break;
            case 'expensiveFirst':
            $sortBy_column = 'price';
            $orderBy = 'desc';
            break;
            case 'popularFirst':
            $sortBy_column = 'views';
            $orderBy = 'desc';
            break;
            case 'newestFirst':
            default:
            $sortBy_column = 'created_at';
            $orderBy = 'desc';
            break;
        }

		$categories_id = [];

		array_push($categories_id,$category->id);
		foreach ($category->children as $category2ndTier) {
			array_push($categories_id,$category2ndTier->id);
			foreach ($category2ndTier->children as $category3rdTier) {
				array_push($categories_id,$category3rdTier->id);
			}
		}

		$products = Product::whereIn('category_id', $categories_id)
		->orderBy($sortBy_column, $orderBy)
		->get();

		return view('categoryPage', [
			'category' => $category,
			'products' => $products
		]);
	}
}
