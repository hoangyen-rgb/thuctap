<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table ='galleries';
    protected $fillable = ['product_id','thummbnail'];

    // Mối quan hệ với Product
    public function product(){
        return $this->belongsTo(product::class);
    }
}
