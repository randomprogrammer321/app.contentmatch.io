<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'icon_url',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    // Relationships
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_platform_links')
            ->withPivot(['platform_username', 'platform_user_id', 'verified_at'])
            ->withTimestamps();
    }

    public function content()
    {
        return $this->hasMany(Content::class);
    }
}
