<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Match;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Traits\Reportable;
use App\Models\Message;
use App\Models\Conversation;
use App\Models\ConversationParticipant;
use Laravel\Cashier\Billable;
class User extends Authenticatable
{
    use  HasFactory, Notifiable, SoftDeletes, Reportable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'full_name',
        'bio',
        'profile_image_url',
        'banner_url',
        'dob',
        'gender',
        'status',
        'google_id',
        'discord_id',
        'onboarding_completed_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_active_at' => 'datetime',
        'onboarding_completed_at' => 'datetime',
        'dob' => 'date',
        'is_verified' => 'boolean',
    ];

    protected $with = ['preferences'];

    // Relationships
    public function socialAccounts(): HasMany
    {
        return $this->hasMany(UserSocialOAuth::class);
    }

    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class, 'user_platform_links')
            ->withPivot(['platform_username', 'platform_user_id', 'platform_url', 'verified_at'])
            ->withTimestamps();
    }

    public function interests(): BelongsToMany
    {
        return $this->belongsToMany(Interest::class, 'user_interests')
            ->withTimestamps();
    }

    public function supportiveCauses(): BelongsToMany
    {
        return $this->belongsToMany(SupportiveCause::class, 'user_supportive_causes')
            ->withTimestamps();
    }

    public function communities(): BelongsToMany
    {
        return $this->belongsToMany(Community::class, 'community_members')
            ->withPivot(['role', 'status', 'last_activity_at'])
            ->withTimestamps();
    }

    public function ownedCommunities(): HasMany
    {
        return $this->hasMany(Community::class, 'owner_id');
    }

    public function content(): HasMany
    {
        return $this->hasMany(Content::class);
    }

    public function engagements(): HasMany
    {
        return $this->hasMany(Engagement::class);
    }

    public function feedback(): HasMany
    {
        return $this->hasMany(Feedback::class);
    }

    public function activities(): HasMany
    {
        return $this->hasMany(UserActivity::class);
    }

    public function deviceTokens(): HasMany
    {
        return $this->hasMany(UserDeviceToken::class);
    }

    public function preferences(): HasOne
    {
        return $this->hasOne(UserPreference::class);
    }

    // public function analytics(): HasMany
    // {
    //     return $this->hasMany(UserAnalytics::class);
    // }

    // public function matchPreferences(): HasOne
    // {
    //     return $this->hasOne(MatchPreference::class);
    // }

    // public function initiatedMatches(): HasMany
    // {
    //     return $this->hasMany(Match::class, 'initiator_id');
    // }

    // public function receivedMatches(): HasMany
    // {
    //     return $this->hasMany(Match::class, 'receiver_id');
    // }

    // public function collaborations(): HasMany
    // {
    //     return $this->hasMany(Collaboration::class, 'initiator_id')
    //         ->orWhere('receiver_id', $this->id);
    // }

    public function achievements(): BelongsToMany
    {
        return $this->belongsToMany(Achievement::class, 'user_achievements')
            ->withPivot(['achieved_at', 'metadata'])
            ->withTimestamps();
    }

    public function notificationSettings(): HasOne
    {
        return $this->hasOne(NotificationSetting::class);
    }

    public function routeNotificationForFcm()
    {
        return $this->deviceTokens()
            ->where('is_active', true)
            ->pluck('device_token')
            ->toArray();
    }

    public function shouldReceiveNotification($type)
    {
        if (!$this->notificationSettings) {
            return true;
        }

        $preferences = $this->notificationSettings->preferences ?? [];
        return $preferences[$type] ?? true;
    }

    public function onboardingProgress()
    {
        return $this->hasMany(UserOnboardingProgress::class);
    }

    /**
     * Get conversations where the user is a participant
     */
    public function conversations(): BelongsToMany
    {
        return $this->belongsToMany(Conversation::class, 'conversation_participants')
            ->withPivot(['last_read_at', 'status'])
            ->withTimestamps();
    }

    /**
     * Get all messages sent by the user
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    /**
     * Get user's conversation participants records
     */
    public function conversationParticipants(): HasMany
    {
        return $this->hasMany(ConversationParticipant::class);
    }

    public function hasCompletedOnboarding(): bool
    {
        return !is_null($this->onboarding_completed_at);
    }

    public function completeOnboarding(): void
    {
        $this->update([
            'onboarding_completed_at' => now()
        ]);
    }

    public function purposes(): BelongsToMany
    {
        return $this->belongsToMany(Purpose::class, 'user_purposes')
            ->withTimestamps();
    }

    public function audienceSizes(): BelongsToMany
    {
        return $this->belongsToMany(AudienceSize::class, 'user_audience_sizes')
            ->withPivot('platform_id')
            ->withTimestamps();
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'user_categories')
            ->withTimestamps();
    }
}
