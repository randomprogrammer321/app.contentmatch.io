# ContentMatch Models Documentation

## Table of Contents
1. [Core Models](#core-models)
2. [Content Models](#content-models)
3. [Community Models](#community-models)
4. [Engagement Models](#engagement-models)
5. [Analytics Models](#analytics-models)
6. [Premium Features Models](#premium-features-models)

## Core Models

### User Model
```php
// Create a new user
$user = User::create([
    'username' => 'johndoe',
    'email' => 'john@example.com',
    'password' => Hash::make('password'),
    'full_name' => 'John Doe',
    'bio' => 'Content creator',
    'dob' => '1990-01-01',
    'gender' => 'M',
]);

// Add interests
$user->interests()->attach([1, 2, 3]); // Interest IDs

// Link platforms
$user->platforms()->attach(1, [
    'platform_username' => '@johndoe',
    'platform_user_id' => 'youtube_123',
    'verified_at' => now()
]);

// Check user status
$isActive = $user->status === 'active';
$isVerified = $user->is_verified;

// Get user analytics
$analytics = $user->analytics()->latest()->first();
```

### Platform Model
```php
// Get all active platforms
$platforms = Platform::where('is_active', true)->get();

// Get users for a platform
$youtubeUsers = Platform::where('name', 'youtube')
    ->first()
    ->users()
    ->verified()
    ->get();

// Get platform content
$platformContent = $platform->content()->with('metrics')->get();
```

## Content Models

### Content Model
```php
// Create new content
$content = Content::create([
    'user_id' => auth()->id(),
    'platform_id' => 1,
    'title' => 'My New Video',
    'description' => 'Check out my latest content',
    'platform_content_id' => 'yt_123',
    'platform_content_url' => 'https://youtube.com/watch?v=123'
]);

// Add tags
$content->tags()->attach($tagIds);

// Get content metrics
$metrics = $content->metrics;

// Get content engagements
$engagements = $content->engagements()->with('user')->get();

// Check content status
$isActive = $content->status === 'active';
```

### Engagement Model
```php
// Create engagement
$engagement = Engagement::create([
    'user_id' => auth()->id(),
    'content_id' => $contentId,
    'did_engage' => true,
    'did_subscribe' => true,
    'did_like' => true,
    'proof_image_url' => 'path/to/proof.jpg'
]);

// Get user's engagements
$userEngagements = auth()->user()->engagements()->latest()->get();

// Check engagement status
$hasEngaged = $engagement->did_engage;
```

## Community Models

### Community Model
```php
// Create community
$community = Community::create([
    'name' => 'Tech Creators',
    'slug' => 'tech-creators',
    'description' => 'A community for tech content creators',
    'owner_id' => auth()->id(),
    'type' => 'public'
]);

// Add members
$community->members()->attach($userId, [
    'role' => 'moderator',
    'status' => 'active'
]);

// Get community content
$content = $community->content()->latest()->get();

// Get community rules
$rules = $community->rules;

// Check community type
$isPublic = $community->type === 'public';
```

## Analytics Models

### UserAnalytics Model
```php
// Get user analytics
$analytics = UserAnalytics::where('user_id', auth()->id())
    ->whereBetween('period_start', [$startDate, $endDate])
    ->get();

// Create analytics record
$analytics = UserAnalytics::create([
    'user_id' => auth()->id(),
    'total_engagements' => 100,
    'total_feedback_received' => 50,
    'platform_metrics' => [
        'youtube' => ['subscribers' => 1000],
        'instagram' => ['followers' => 500]
    ]
]);
```

## Premium Features Models

### Subscription Model
```php
// Create subscription
$subscription = Subscription::create([
    'user_id' => auth()->id(),
    'name' => 'premium',
    'status' => 'active',
    'trial_ends_at' => now()->addDays(14)
]);

// Check subscription status
$isActive = $subscription->status === 'active';
$isTrialing = $subscription->trial_ends_at > now();

// Get subscription features
$features = $subscription->features;

// Track feature usage
$subscription->usage()->create([
    'feature_id' => 1,
    'used_count' => 1,
    'reset_at' => now()->addMonth()
]);
```

## Common Traits and Interfaces

### Reportable Trait
```php
// Add to any model that can be reported
use App\Models\Traits\Reportable;

class Content extends Model
{
    use Reportable;
}

// Report content
$content->report(auth()->id(), 'inappropriate', 'Contains inappropriate content');

// Check if reported
$isReported = $content->isReportedBy(auth()->id());
```

### Notifiable Trait
```php
// Already included in User model
$user->notify(new ContentEngagementNotification($content));

// Check unread notifications
$unreadCount = $user->unreadNotifications()->count();

// Mark notifications as read
$user->notifications()->markAsRead();
```

## Best Practices

1. Always use relationships instead of direct IDs when possible
2. Utilize model events for related actions
3. Use model scopes for common queries
4. Implement proper validation in models
5. Use model observers for complex operations
6. Leverage model factories for testing
7. Use proper eager loading to avoid N+1 queries

## Examples of Complex Operations

### Creating Content with Related Data
```php
// Complex content creation
$content = Content::create([...]);
$content->tags()->attach($tagIds);
$content->metrics()->create([...]);
$content->user->notify(new ContentCreatedNotification($content));
```

### Community Management
```php
// Add member with role and notify
$community->members()->attach($userId, ['role' => 'moderator']);
$user->notify(new CommunityRoleAssignedNotification($community));
```

### Engagement Processing
```php
// Process engagement with analytics update
$engagement = Engagement::create([...]);
$user->analytics()->increment('total_engagements');
$content->metrics()->increment('engagement_count');
```
