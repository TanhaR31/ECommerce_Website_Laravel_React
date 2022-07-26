<?php

namespace App\Http\Controllers;

use App\Models\SellerProduct;
use App\Http\Requests\StoreSellerProductRequest;
use App\Http\Requests\UpdateSellerProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Seller;
use App\Models\SellerProductCategory;
use App\Models\SellerType;


class SellerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSellerProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerProduct  $sellerProduct
     * @return \Illuminate\Http\Response
     */
    public function show(SellerProduct $sellerProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerProduct  $sellerProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerProduct $sellerProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerProductRequest  $request
     * @param  \App\Models\SellerProduct  $sellerProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerProductRequest $request, SellerProduct $sellerProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerProduct  $sellerProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerProduct $sellerProduct)
    {
        //
    }

    // Relation Product List
    // public function sellerProduct(){
    //     $id=session()->get('seller');
    //     // $products = SellerProduct::where('s_id', $id)->get();
    //     // return view('pages.seller.sellerProduct')->with('products', $products);
    //     $product = SellerProduct::where('s_id',$id)->first();
    //     //return $product;
    //     return $product->sellerProductBelongsToSeller;
    // }

    //Middleware
    public function __construct(){
        $this->middleware('ValidSeller');
    }

    //New Product Create
    public function sellerProductCreate(){
        $last = DB::table('seller_products')
                ->orderBy('id', 'desc')
                ->first();
        $ctg=SellerProductCategory::latest()->get();
        //dd($ctg);
        if($last){
            $data = $last->id+1;
            return view('pages.seller.sellerProductCreate', compact('ctg','data'));
        }
        else
        return view('pages.seller.sellerProductCreate');
    }

    public function sellerProductCreateSubmitted(Request $request){
    //return $request;
            $validate = $request->validate([
            'p_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [        

        ]
    );

        $id=session()->get('seller');
        $st = SellerType::where('s_id', $id)->first();
        //return $st;
        //$c=$request->ct_id;
        $ct = SellerProductCategory::where('id',$request->ct_id)->first();
        //return $ct;

        $product = new SellerProduct();
        $product->id = $request->id;
        $product->s_id = $id;
        $product->p_name = $request->p_name;
        $product->ct_id = $request->ct_id;
        $product->p_category = $ct->p_category;
        $product->p_description = $request->p_description;
        $product->p_qty = $request->p_qty;
        $product->p_sold = 0;
        $product->fix_cost = $request->fix_cost;
        $product->var_cost = $request->var_cost;
        $product->st_id = $st->id;
        $product->adm_cost = $st->amount;
        $product->extra_price = $request->extra_price;
        $product->discount = $request->discount;
        $product->total_price = $request->fix_cost+$request->var_cost+ $st->amount+$request->extra_price-$request->discount;
        $product->p_approve = 0;
        $imageName = time()."_".$request->file('p_image')->getClientOriginalName();
        $request->p_image->move(public_path('images'), $imageName);
        $product->p_image=$imageName;
        $product->save();
        
        return redirect(route('sellerProduct'));
    }

    //Product Edit
    public function sellerProductEdit(Request $request){
        //return $request;
        $product = SellerProduct::where('id', $request->id)->first();
        $ctg=SellerProductCategory::latest()->get();
        return view('pages.seller.sellerProductEdit', compact('ctg','product'));
    }

    public function sellerProductEditSubmitted(Request $request){
    //return $request;
            $validate = $request->validate([
            'p_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [        

        ]
    );

        $id=session()->get('seller');
        $st = SellerType::where('s_id', $id)->first();
        //return $st;
        //$c=$request->ct_id;
        $ct = SellerProductCategory::where('id',$request->ct_id)->first();
        //return $ct;

        $product = SellerProduct::where('id',$request->id)->first();
        $product->id = $request->id;
        $product->s_id = $id;
        $product->p_name = $request->p_name;
        $product->ct_id = $request->ct_id;
        $product->p_category = $ct->p_category;
        $product->p_description = $request->p_description;
        $product->p_qty = $request->p_qty;
        $product->p_sold = $product->p_sold;
        $product->fix_cost = $request->fix_cost;
        $product->var_cost = $request->var_cost;
        $product->st_id = $st->id;
        $product->adm_cost = $st->amount;
        $product->extra_price = $request->extra_price;
        $product->discount = $request->discount;
        $product->total_price = $request->fix_cost+$request->var_cost+ $st->amount+$request->extra_price-$request->discount;
        $product->p_approve = $product->p_approve;

        if($request->hasFile('p_image')){
            $imageName = time()."_".$request->file('p_image')->getClientOriginalName();
            $request->p_image->move(public_path('images'), $imageName);
            $product->p_image=$imageName;
            $product->save();
        }else{
            
            $product->p_image=$product->p_image;
        }
        $product->save();
        
        return redirect(route('sellerProduct'));
    }

    //Product Delete
    public function sellerProductDelete(Request $request){
        $product = SellerProduct::where('id',$request->id)->first();
        $product->delete();

        return redirect()->route('sellerProduct');
    }


}
