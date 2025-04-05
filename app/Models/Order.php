<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment',
        'delivery_method_id',
        'payment_type_id',
        'total',
        'products',
        'address',
        'status_id'
    ];

    protected $casts = [
        'products'=> 'array',
        'address'=> 'array'
    ];

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function paymentType(): BelongsTo
    {
        return $this->belongsTo(payment_type::class);
    }

    public function delivery_method(): BelongsTo
    {
        return $this->belongsTo(delivery_method::class);
    }


    public function userAddress(): BelongsTo
    {
        return $this->belongsTo(UserAddress::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
