<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'discount',
        'sold',
        'category_id',
        'brand_id',
    ];

    // Scope để lấy 5 sản phẩm mới nhất
    public function scopeNewProduct($query)
    {
        return $query->orderBy('created_at', 'desc')->take(5)->get();
    }

    // Scope để lấy 5 sản phẩm bán chạy
    public function scopeProductTopSeller($query)
    {
        return $query->orderBy('sold', 'desc')->take(5)->get();
    }

    // Mối quan hệ với Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Mối quan hệ với Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Mối quan hệ với Gallery
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}