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
    public function index(Request $request)
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

        $products = Product::orderBy($sortBy_column, $orderBy)
                            ->paginate(25);
        return view('index', ['products' => $products]);
    }
}
