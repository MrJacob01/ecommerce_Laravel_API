<?php

namespace App\Http\Resources;

use App\Models\delivery_method;
use App\Models\payment_type;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'delivery_method' => $this->delivery_method,
            'payment_type' => $this->paymentType,
            'status' => $this->status,
            // 'delivery_method' => DeleveryMethodResource::collection($this->delivery_method),
            // 'payment_type' => PaymentTypeResource::collection($this->paymentType),
            // 'status' => StatusResource::collection($this->status),
            'total' => $this->total,
            'address' => $this->address,
            'products' => $this->products,
        ];
    }
}
