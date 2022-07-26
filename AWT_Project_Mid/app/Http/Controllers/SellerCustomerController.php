<?php

namespace App\Http\Controllers;

use App\Models\SellerCustomer;
use App\Http\Requests\StoreSellerCustomerRequest;
use App\Http\Requests\UpdateSellerCustomerRequest;

class SellerCustomerController extends Controller
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
     * @param  \App\Http\Requests\StoreSellerCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerCustomer  $sellerCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(SellerCustomer $sellerCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerCustomer  $sellerCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerCustomer $sellerCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerCustomerRequest  $request
     * @param  \App\Models\SellerCustomer  $sellerCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerCustomerRequest $request, SellerCustomer $sellerCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerCustomer  $sellerCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerCustomer $sellerCustomer)
    {
        //
    }
}
