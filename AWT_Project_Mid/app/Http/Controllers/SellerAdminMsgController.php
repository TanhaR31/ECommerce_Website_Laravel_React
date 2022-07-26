<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellerAdminMsg;
use App\Http\Requests\StoreSellerAdminMsgRequest;
use App\Http\Requests\UpdateSellerAdminMsgRequest;
use App\Http\Requests\StoreSellerProductRequest;
use App\Http\Requests\UpdateSellerProductRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Seller;

class SellerAdminMsgController extends Controller
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
     * @param  \App\Http\Requests\StoreSellerAdminMsgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerAdminMsgRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerAdminMsg  $sellerAdminMsg
     * @return \Illuminate\Http\Response
     */
    public function show(SellerAdminMsg $sellerAdminMsg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerAdminMsg  $sellerAdminMsg
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerAdminMsg $sellerAdminMsg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerAdminMsgRequest  $request
     * @param  \App\Models\SellerAdminMsg  $sellerAdminMsg
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerAdminMsgRequest $request, SellerAdminMsg $sellerAdminMsg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerAdminMsg  $sellerAdminMsg
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerAdminMsg $sellerAdminMsg)
    {
        
    }
    public function sellerAdminMsg()
    {
        $admin = SellerAdminMsg::where('from','admin')->get();
        $seller = SellerAdminMsg::where('from','seller')->get();
        //return $admin;
        return view('pages.seller.sellerAdminMsg')->with('admin', $admin)->with('seller', $seller);
    }
}
