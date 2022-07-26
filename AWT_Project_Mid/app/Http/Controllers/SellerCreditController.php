<?php

namespace App\Http\Controllers;

use App\Models\SellerCredit;
use App\Http\Requests\StoreSellerCreditRequest;
use App\Http\Requests\UpdateSellerCreditRequest;

class SellerCreditController extends Controller
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
     * @param  \App\Http\Requests\StoreSellerCreditRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerCreditRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerCredit  $sellerCredit
     * @return \Illuminate\Http\Response
     */
    public function show(SellerCredit $sellerCredit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerCredit  $sellerCredit
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerCredit $sellerCredit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerCreditRequest  $request
     * @param  \App\Models\SellerCredit  $sellerCredit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerCreditRequest $request, SellerCredit $sellerCredit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerCredit  $sellerCredit
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerCredit $sellerCredit)
    {
        //
    }
}
