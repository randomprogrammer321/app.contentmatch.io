<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Purpose extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_purposes')
            ->withTimestamps();
    }
} 