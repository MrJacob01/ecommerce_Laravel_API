<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class payment_type extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentTypeFactory> */
    use HasFactory, HasTranslations, SoftDeletes;

    protected $fillable = [
        'name',  
    ];

    public array $translatable = ['name'];


    public function orders(): HasMany 
    {
        return $this->hasMany(Order::class);
    }

    public function user_cards(): BelongsTo
    {
        return $this->belongsTo(UserPaymentCard::class);
    }
}
