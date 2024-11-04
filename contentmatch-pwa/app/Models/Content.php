<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Reportable;

class Content extends Model
{
    use HasFactory, SoftDeletes, Reportable;

    protected $fillable = [
        'user_id',
        'community_id',
        'platform_id',
        'title',
        'description',
        'platform_content_id',
        'platform_content_url',
        'allow_feedback',
        'allow_engagement',
        'status'
    ];

    protected $casts = [
        'allow_feedback' => 'boolean',
        'allow_engagement' => 'boolean',
        'status' => 'string'
    ];

    protected $with = ['user', 'metrics'];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    public function metrics()
    {
        return $this->hasOne(ContentMetrics::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function hashtags()
    {
        return $this->morphToMany(Hashtag::class, 'hashtaggable');
    }

    public function engagements()
    {
        return $this->hasMany(Engagement::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    public function interests()
    {
        return $this->morphToMany(Interest::class, 'interestable');
    }
}
