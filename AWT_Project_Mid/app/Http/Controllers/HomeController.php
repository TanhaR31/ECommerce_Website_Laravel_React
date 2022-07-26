<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellerProduct;
use App\Http\Requests\StoreSellerProductRequest;
use App\Http\Requests\UpdateSellerProductRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Seller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = SellerProduct::where('p_approve', 1)->get();
        return view('home')->with('products', $products);
    }
}
