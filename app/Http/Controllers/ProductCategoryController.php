<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;

class ProductCategoryController extends Controller
{
    public function show(ProductCategory $category)
    {
        $products = $category->products;

        return view('categoryPage', [
            'category' => $category,
            'products' => $products
        ]);
    }
}
