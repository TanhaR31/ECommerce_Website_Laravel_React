<?php

namespace App\Http\Controllers;

use App\Models\SellerOrder;
use App\Http\Requests\StoreSellerOrderRequest;
use App\Http\Requests\UpdateSellerOrderRequest;

class SellerOrderController extends Controller
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
     * @param  \App\Http\Requests\StoreSellerOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerOrder  $sellerOrder
     * @return \Illuminate\Http\Response
     */
    public function show(SellerOrder $sellerOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerOrder  $sellerOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerOrder $sellerOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerOrderRequest  $request
     * @param  \App\Models\SellerOrder  $sellerOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerOrderRequest $request, SellerOrder $sellerOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerOrder  $sellerOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerOrder $sellerOrder)
    {
        //
    }
}
