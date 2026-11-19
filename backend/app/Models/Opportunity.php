<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $fillable = [
        'title',
        'organization',
        'type',
        'deadline',
        'coverage',
        'location',
        'description',
        'apply_url',
        'is_saved',
        'is_featured',
    ];

    protected $casts = [
        'is_saved' => 'boolean',
        'is_featured' => 'boolean',
    ];
}
