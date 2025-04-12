<?php

namespace App\Http\Controllers;

use App\Models\payment_type;
use App\Http\Requests\Storepayment_typeRequest;
use App\Http\Requests\Updatepayment_typeRequest;
use App\Http\Resources\PaymentTypeResource;
use Illuminate\Database\Eloquent\Collection;

class PaymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->response(null, [PaymentTypeResource::collection(payment_type::cursorPaginate(3))]);
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
    public function store(Storepayment_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(payment_type $payment_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(payment_type $payment_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatepayment_typeRequest $request, payment_type $payment_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(payment_type $payment_type)
    {
        //
    }
}
