<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory, HasTranslations;

    protected $fillable = ["parent_id", "name", "icon"];

    public array $translatable = ["name"];

    public function ChildCategories()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function ParentCategory()
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }


    public function products(): HasMany 
    {
        return $this->hasMany(Product::class);
    }
}
