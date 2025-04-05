<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeleveryMethodResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->getTranslations('name'),
            'estimated_time'=>$this->estimated_time,
            'price'=>$this->price
        ];
    }
}
