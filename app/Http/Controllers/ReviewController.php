<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Http\Resources\ReviewResource;

class ReviewController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:sanctum');
    // }

    public function index()
    {
        // return response([
        //     "list"=>ReviewResource::collection(auth()->user()->reviews()->paginate(2))
        // ]);
    }

    public function store(StoreReviewRequest $request)
    {
        // auth()->user()->reviews()->create([
        //     'product_id'=>$request->product_id,
        //     'describtion'=>$request->describtion,
        //     'rate'=>$request->rate,
        // ]);


        // return response(['message'=>"saved"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
