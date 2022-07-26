<?php

namespace App\Http\Controllers;

use App\Models\SellerOrderDetail;
use App\Http\Requests\StoreSellerOrderDetailRequest;
use App\Http\Requests\UpdateSellerOrderDetailRequest;

class SellerOrderDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreSellerOrderDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerOrderDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerOrderDetail  $sellerOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SellerOrderDetail $sellerOrderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerOrderDetail  $sellerOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerOrderDetail $sellerOrderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerOrderDetailRequest  $request
     * @param  \App\Models\SellerOrderDetail  $sellerOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerOrderDetailRequest $request, SellerOrderDetail $sellerOrderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerOrderDetail  $sellerOrderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerOrderDetail $sellerOrderDetail)
    {
        //
    }
}
