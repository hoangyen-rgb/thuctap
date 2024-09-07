<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambassador extends Model
{
    use HasFactory;
    protected $table = 'ambassadors';
    protected $fillable = ['name','username','facebook_url','twitter_url','youtube_url','image'];

    // Scope để lấy 5 người đại sứ
    public function scopeGet5Ambassadors($query)
    {
        return $query->orderBy('id', 'asc')->take(5)->get();
    }
}