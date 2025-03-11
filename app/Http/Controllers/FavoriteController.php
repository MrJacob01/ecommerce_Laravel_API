<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth:sanctum');
    }


    public function index()
    {
        return auth()->user()->favorites()->get();
    }

    public function store(Request $request): JsonResponse
    {
        auth()->user()->favorites()->attach($request->product_id);

        return response()->json([
            "Message"=>"success"
        ]);
    }

    public function show($favorite_id)
    {
        if (auth()->user()->hasFavorite($favorite_id))
        {
            return response()->json([
                "Message"=>"exist" . "{$favorite_id}"
            ]);
        }

        // return response()->json([
        //     "Message"=>"success, Deleted" . "{$favorite_id}"
        // ]);
    }
}
