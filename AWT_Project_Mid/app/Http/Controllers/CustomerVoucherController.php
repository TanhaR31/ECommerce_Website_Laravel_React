<?php

namespace App\Http\Controllers;

use App\Models\CustomerVoucher;
use App\Http\Requests\StoreCustomerVoucherRequest;
use App\Http\Requests\UpdateCustomerVoucherRequest;

class CustomerVoucherController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerVoucherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerVoucherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerVoucher  $customerVoucher
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerVoucher $customerVoucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerVoucher  $customerVoucher
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerVoucher $customerVoucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerVoucherRequest  $request
     * @param  \App\Models\CustomerVoucher  $customerVoucher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerVoucherRequest $request, CustomerVoucher $customerVoucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerVoucher  $customerVoucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerVoucher $customerVoucher)
    {
        //
    }
}
