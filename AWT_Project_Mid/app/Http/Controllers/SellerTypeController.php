<?php

namespace App\Http\Controllers;

use App\Models\SellerType;
use App\Http\Requests\StoreSellerTypeRequest;
use App\Http\Requests\UpdateSellerTypeRequest;

class SellerTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreSellerTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerType  $sellerType
     * @return \Illuminate\Http\Response
     */
    public function show(SellerType $sellerType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerType  $sellerType
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerType $sellerType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerTypeRequest  $request
     * @param  \App\Models\SellerType  $sellerType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerTypeRequest $request, SellerType $sellerType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerType  $sellerType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerType $sellerType)
    {
        //
    }
}
