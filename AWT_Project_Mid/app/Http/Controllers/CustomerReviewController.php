<?php

namespace App\Http\Controllers;

use App\Models\CustomerReview;
use App\Http\Requests\StoreCustomerReviewRequest;
use App\Http\Requests\UpdateCustomerReviewRequest;

class CustomerReviewController extends Controller
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
     * @param  \App\Http\Requests\StoreCustomerReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerReviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerReview  $customerReview
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerReview $customerReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerReview  $customerReview
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerReview $customerReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerReviewRequest  $request
     * @param  \App\Models\CustomerReview  $customerReview
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerReviewRequest $request, CustomerReview $customerReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerReview  $customerReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerReview $customerReview)
    {
        //
    }
}
