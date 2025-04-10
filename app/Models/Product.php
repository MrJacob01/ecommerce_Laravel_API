<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, HasTranslations;

    protected $fillable = [
        "category_id",
        "name",
        "price",
        "description",
    ];

    public array $translatable = ["name", "description"];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function stocks(): HasMany {
        return $this->hasMany(Stock::class);
    }

    public function withStocks($stockID): static
    {
        $this->stocks = [$this->stocks()->findOrFail($stockID)];
        return $this;
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
