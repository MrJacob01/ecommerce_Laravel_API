<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Resources\ReviewResource;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(Product $product)
    {
        $review_ = $product->reviews();

        return $this->success(
            null,
            [
                'total_rate'=>$review_->avg('rate'),
                'Total_reviews'=>$review_->count(),
                'list'=>ReviewResource::collection($review_->paginate(10))
            ]
            );
    }

    public function store(Product $product, StoreReviewRequest $request)
    {
        $product->reviews()->create([
            'user_id'=>auth()->user()->id,
            'describtion'=>$request->describtion,
            'rate'=>$request->rate
        ]);

        return $this->response('saved');
    }
}
