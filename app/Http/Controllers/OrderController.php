<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;
use Illuminate\Container\Attributes\DB;
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
        return OrderResource::collection(auth()->user()->orders()->paginate(2));
    }


    public function store(StoreOrderRequest $request)
    {
        $sum = 0;
        $products = [];
        $notFoundsProducts = [];

        foreach ($request['products'] as $productRequest)
        {
            $product_items = Product::with('stocks')->findOrFail($productRequest['product_id']);
            $product_items->quantity = $productRequest['quantity'];

            // $stocka = $product_items->stocks()->find($product['stock_id'])->quantity;
            // $quantita = $stocka ? $stocka->quantity : null;

            if ($product_items->stocks()->find($productRequest['stock_id'])
             && $product_items->stocks()->find($productRequest['stock_id'])->quantity >= $productRequest['quantity'])
            {
                
                $item = $product_items->withStocks($productRequest['stock_id']);
                $productResource =  new ProductResource($item);

                $sum += $productResource['price'];
                $products[] = $productResource->resolve();
            
                
            }
            else {
                $notFoundsProducts[] = $productRequest;
                $quantity_in_stocks = $product_items->stocks()->find($productRequest['stock_id'])->quantity;
                
                return response([
                    'message' => "Bu tovardan mavjud emas!",
                    'not_found_products' => $notFoundsProducts,
                    'quantity_in_stocks'=>$quantity_in_stocks
                ]);
            }
        }
        
        if ($notFoundsProducts == [] && $products != [] && $sum != 0)
        {
            $order = auth()->user()->orders()->create([
                'comment'=>$request->comment,
                'delivery_method_id'=>$request->delivery_method_id,
                'payment_type_id'=>$request->payment_type_id,
                'total'=>$sum,
                'address'=>[UserAddress::find($request->address)],
                'products'=>$products,
                'status_id'=>in_array($request['payment_type_id'], [2, 3]) ? 7: 1
            ]);
    
            if ($order)
            {
                foreach ($products as $product)
                {
                    $stock_data = Stock::find($product['inventory'][0]['id']);
                    $stock_data->quantity -= $product['order_quantity'];
                    $stock_data->save();
                }
            }
            
            return response()->json([
                'message'=>'Buyutma yaratilindi!'
            ]);
        } else {
            return response([
                'message' => "Something wrong"
            ]);
        }

        
    }

    public function show(Order $order)
    {
        return new OrderResource($order);
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
        $order->delete();
        return response([
            'message'=>"Successfully deleted from User's orders",
        ]);

    }
}
