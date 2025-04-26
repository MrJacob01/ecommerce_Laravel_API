<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ValueResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'valueable_model'=>$this->valueable_model,
            'valueable_id'=>$this->valueable_id,
            'name'=>$this->getTranslations('name'),
        ];
    }
}
