<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hashtag extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'usage_count',
        'is_trending'
    ];

    protected $casts = [
        'usage_count' => 'integer',
        'is_trending' => 'boolean'
    ];

    // Relationships
    public function contents()
    {
        return $this->morphedByMany(Content::class, 'hashtaggable');
    }

    public function communities()
    {
        return $this->morphedByMany(Community::class, 'hashtaggable');
    }

    // Scopes
    public function scopeTrending($query)
    {
        return $query->where('is_trending', true);
    }

    public function scopePopular($query, $limit = 10)
    {
        return $query->orderBy('usage_count', 'desc')->limit($limit);
    }
}
