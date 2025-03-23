<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\UserAddress;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Http\JsonResponse;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum'); 
    }

    public function index()
    {
        return auth()->user()->orders()->get();
    }


    public function store(StoreOrderRequest $request)
    {
        $sum = 0;
        $products = Product::query()->limit(2)->get();
        $address = auth()->user()->addresses; 

        auth()->user()->orders()->create([
            'comment'=>$request->comment,
            'delivery_method_id'=>$request->delivery_method_id,
            'payment_type_id'=>$request->payment_type_id,
            'total'=>$sum,
            'address'=>$address->toJson(),
            'products'=>$products,
            
        ]);
        
        return response()->json([
            'message'=>'succesfully saved!'
        ]);
    }

    public function show(Order $order)
    {
        return $order;
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}
