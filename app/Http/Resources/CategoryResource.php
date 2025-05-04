<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            /**
            * If you want to display child of parent's child like a tree then change this
            * 'childCategories'=>$this->ChildCategories,     ->   'childCategories'=>self::collection($this->ChildCategories),
            */

            'childCategories'=>$this->ChildCategories,
            'icon'=>$this->icon
        ];
    }
}
