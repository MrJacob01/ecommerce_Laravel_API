<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Attribute extends Model
{
    /** @use HasFactory<\Database\Factories\AttributeFactory> */
    use HasFactory, HasTranslations;

    protected $fillable = ["name"];

    public array $translatable = ["name"];

    public function values(): HasMany {
        return $this->hasMany(Value::class);
    }

    
}
