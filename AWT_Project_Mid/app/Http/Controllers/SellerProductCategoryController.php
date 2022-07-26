<?php

namespace App\Http\Controllers;

use App\Models\SellerProductCategory;
use App\Http\Requests\StoreSellerProductCategoryRequest;
use App\Http\Requests\UpdateSellerProductCategoryRequest;

class SellerProductCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreSellerProductCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerProductCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellerProductCategory  $sellerProductCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SellerProductCategory $sellerProductCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellerProductCategory  $sellerProductCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SellerProductCategory $sellerProductCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerProductCategoryRequest  $request
     * @param  \App\Models\SellerProductCategory  $sellerProductCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerProductCategoryRequest $request, SellerProductCategory $sellerProductCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellerProductCategory  $sellerProductCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SellerProductCategory $sellerProductCategory)
    {
        //
    }
}
