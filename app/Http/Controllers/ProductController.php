<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProduct;
use App\Product;
use App\ProductCategory;


class ProductController extends Controller
{
	public function index()
    {
        return Product::all();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }

    // Create Ad
    public function showForm() {
        $categories = ProductCategory::where('parent_category_id', null)->get();

        return view('postAd', [
            'categories' => $categories,
        ]);
    }

    public function storeAd(StoreProduct $request) {
        $id = Auth::id();
        $path = Storage::putFile('public', $request->file('image'));
        Storage::setVisibility($path, 'public');

        $imagePath = explode('/',$path);
        $path =  "storage/".$imagePath[1];

        $product = [
            'user_id' => $id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'image' => $path,
				'showChat' => $request->has('showChat'),
        ];

        $product = Product::create($product);

        return redirect('/')->with('alert_msg', "<strong>Great!</strong> You've posted a new ad!");
    }

		public function showAd(Product $product){
            $views = $product->views;
            $product->views = $views + 1;
            $product->save();

			return view('viewAd', ['product' => $product]);
		}

    public function removeProduct(Product $product) {
        if (Auth::user()->id !== $product->user_id) {
            redirect('/')->with('alert_msg', "You don't have permission to remove this item!");
        }

        Product::destroy($product->id);

        return back();
    }
}
