<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Community extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'owner_id',
        'type',
        'banner_url',
        'status',
        'purpose_template_id',
        'has_custom_purpose'
    ];

    protected $casts = [
        'type' => 'string',
        'status' => 'string',
        'has_custom_purpose' => 'boolean'
    ];

    // Relationships
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'community_members')
            ->withPivot(['role', 'status', 'last_activity_at'])
            ->withTimestamps();
    }

    public function rules()
    {
        return $this->hasMany(CommunityRule::class);
    }

    public function settings()
    {
        return $this->hasOne(CommunitySettings::class);
    }

    public function content()
    {
        return $this->hasMany(Content::class);
    }

    public function engagementScores()
    {
        return $this->hasMany(CommunityEngagementScore::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function purposeTemplate()
    {
        return $this->belongsTo(CommunityPurposeTemplate::class, 'purpose_template_id');
    }
}
