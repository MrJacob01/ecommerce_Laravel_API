<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Stock;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->getTranslations('name'),
            'price'=>$this->price,
            'description'=>$this->description,
            'category'=>$this->category->getTranslations('name'),
            'inventory'=>StockResource::collection($this->stocks),
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
        ];
    }
}
