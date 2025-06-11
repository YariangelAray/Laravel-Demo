<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'path'
    ];
    
    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'img_id');
    }

    public function productCategory(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'products', 'category_id', 'img_id');
    }
}
