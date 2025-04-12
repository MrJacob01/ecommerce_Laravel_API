<?php

namespace App\Http\Controllers;

use App\Models\delivery_method;
use App\Http\Requests\Storedelivery_methodRequest;
use App\Http\Requests\Updatedelivery_methodRequest;
use App\Http\Resources\DeleveryMethodResource;
use Illuminate\Database\Eloquent\Collection;

class DeliveryMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->response(null, [DeleveryMethodResource::collection(delivery_method::cursorPaginate(10))]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storedelivery_methodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(delivery_method $delivery_method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(delivery_method $delivery_method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedelivery_methodRequest $request, delivery_method $delivery_method)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(delivery_method $delivery_method)
    {
        //
    }
}
