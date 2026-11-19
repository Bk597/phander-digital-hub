<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Roadmap extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'duration',
        'description',
        'sort_order',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function steps(): HasMany
    {
        return $this->hasMany(RoadmapStep::class)->orderBy('position');
    }

    /** Progress percentage based on completed steps */
    public function progressPercent(): int
    {
        $total = $this->steps->count();
        if ($total === 0) {
            return 0;
        }

        return (int) round($this->steps->where('is_done', true)->count() / $total * 100);
    }
}
