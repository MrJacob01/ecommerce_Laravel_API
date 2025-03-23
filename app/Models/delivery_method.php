<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class delivery_method extends Model
{
    /** @use HasFactory<\Database\Factories\DeliveryMethodFactory> */
    use HasFactory, HasTranslations;

    protected $fillable = [
        'name',
        'estimated_time',
        'price',   
    ];

    public array $translatable = ['name'];


    public function orders(): HasMany 
    {
        return $this->hasMany(Order::class);
    }

    
}

