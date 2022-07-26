<?php

namespace App\Http\Controllers;

use App\Models\SellerProduct;
use App\Models\SellerType;
use App\Models\SellerProductCategory;

use Illuminate\Http\Request;

class SellerProductAPIController extends Controller
{
    //
    public function list()
    {
        $products = SellerProduct::where('p_approve', 1)->get();
        return $products;
    }

    public function slist(Request $request)
    {
        $st = SellerProduct::where('s_id', $request->s_id)->get();
        return $st;
    }

    public function ulist(Request $request)
    {
        $st = SellerProduct::where('s_id', $request->s_id)
        ->where('p_approve', 0)->get();
        return $st;
    }

    public function add(Request $request)
    {

        $st = SellerType::where('s_id', $request->s_id)->first();
        //return $st;
        //$c=$request->ct_id;
        $ct = SellerProductCategory::where('id', $request->ct_id)->first();
        //return $ct;

        $product = new SellerProduct();
        //$product->id = $request->id;
        $product->s_id = $request->s_id;
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
        $product->total_price = $request->fix_cost + $request->var_cost + $st->amount + $request->extra_price - $request->discount;
        $product->p_approve = 0;
        // $imageName = time()."_".$request->file('p_image')->getClientOriginalName();
        // $request->p_image->move(public_path('images'), $imageName);
        //$product->p_image=$request->file('p_image')->store('products');
        $product->p_image = "";
        $product->save();

        return $product;
    }

    public function getProduct(Request $request)
    {
        $product = SellerProduct::where('id', $request->id)->first();
        return $product;
    }

    // public function updateProduct(Request $request)
    // {
    //     //return $request;
    //     $product = SellerProduct::where('id', $request->id)->first();
    // }

    public function updateProduct(Request $request)
    {
        // $id = session()->get('seller');
        $st = SellerType::where('s_id', $request->s_id)->first();
        //return $st;
        //$c=$request->ct_id;
        $ct = SellerProductCategory::where('id', $request->ct_id)->first();
        //return $ct;

        $product = SellerProduct::where('id', $request->id)->first();
        $product->id = $request->id;
        $product->s_id = $request->s_id;
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
        $product->total_price = $request->fix_cost + $request->var_cost + $st->amount + $request->extra_price - $request->discount;
        $product->p_approve = $product->p_approve;

        // if ($request->hasFile('p_image')) {
        //     $imageName = time() . "_" . $request->file('p_image')->getClientOriginalName();
        //     $request->p_image->move(public_path('images'), $imageName);
        //     $product->p_image = $imageName;
        //     $product->save();
        // } else {

        //     $product->p_image = $product->p_image;
        // }

        $product->save();

        return $product;
    }

    public function deleteProduct(Request $request){
        SellerProduct::where('id',$request->id)->delete();
        return "Product Deleted";
    }

    public function changeApprove(Request $request){
        $product=SellerProduct::where('id',$request->id)->first();
        $product->p_approve = 1;
        $product->save();        
    }

}
