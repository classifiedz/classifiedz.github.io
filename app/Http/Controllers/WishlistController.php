<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Wishlist;
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

    public function storeUserWishlist(Request $request){
        $user_id = Auth::id();
        $product_id = $request->product_id;

        if(!isset($product_id) || !is_numeric ($product_id)){
            redirect('/')->with('alert_msg', "You didn't pass in a valid product id!");

            if(Product::find($request->product_id) == null){
                redirect('/')->with('alert_msg', "Product you passed does not exist!");
            }
        }

        $wishlistFound = Wishlist::where('user_id', $user_id)
                                ->where('product_id', $product_id)
                                ->first();

        if ($wishlistFound == null) {
            Wishlist::create([
                'user_id' => $user_id,
                'product_id' => $product_id
            ]);
        }

        return redirect('/wishlist');
    }

    public function removeUserWishlist(Wishlist $wishlist){
        if (Auth::user()->id !== $wishlist->user_id) {
            redirect('/')->with('alert_msg', "You don't have permission to remove this item!");
        }

        Wishlist::destroy($wishlist->id);

        return redirect('/wishlist');
    }
}
