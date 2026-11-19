<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketProduct extends Model
{
    protected $fillable = [
        'title',
        'creator_name',
        'village',
        'category',
        'price',
        'description',
        'contact',
        'likes',
        'is_favorite',
        'emoji',
    ];

    protected $casts = [
        'is_favorite' => 'boolean',
        'likes' => 'integer',
    ];
}
