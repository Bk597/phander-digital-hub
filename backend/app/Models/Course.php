<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'category',
        'duration',
        'lessons_count',
        'instructor',
        'description',
        'rating',
        'modules',
        'is_enrolled',
        'progress',
        'is_featured',
    ];

    protected $casts = [
        'modules' => 'array',
        'rating' => 'float',
        'is_enrolled' => 'boolean',
        'is_featured' => 'boolean',
        'progress' => 'integer',
        'lessons_count' => 'integer',
    ];
}
