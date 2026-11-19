<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoadmapStep extends Model
{
    protected $fillable = [
        'roadmap_id',
        'title',
        'description',
        'position',
        'is_done',
    ];

    protected $casts = [
        'is_done' => 'boolean',
        'position' => 'integer',
    ];

    public function roadmap(): BelongsTo
    {
        return $this->belongsTo(Roadmap::class);
    }
}
