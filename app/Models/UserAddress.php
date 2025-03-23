<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAddress extends Model
{
    /** @use HasFactory<\Database\Factories\UserAddressFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'latitude',
        'longtitude',
        'region',
        'district',
        'street',
        'home',    
    ];


    public function users(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }
}
