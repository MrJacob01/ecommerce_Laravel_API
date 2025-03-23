<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserPaymentCard extends Model
{
    /** @use HasFactory<\Database\Factories\UserPaymentCardFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_type_card_id',
        'name',
        'number_card',
        'exp_date',
        'holder_name',
        'cvv',
    ];

    public function payment_type(): HasMany
    {
        return $this->hasMany(delivery_method::class);
    }
}
