<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    const VIGAS = 1;
    const LAMINAS = 2;

    public function getPriceAttribute($value)
    {
        return number_format($value, 2);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeVigas($query)
    {
        return $query->whereHas('categories', fn ($query) => $query->where('id', Product::VIGAS));
    }

    public function scopeLaminas($query)
    {
        return $query->whereHas('categories', fn ($query) => $query->where('id', Product::LAMINAS));
    }
}
