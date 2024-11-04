<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email_notifications',
        'push_notifications',
        'preferences'
    ];

    protected $casts = [
        'email_notifications' => 'boolean',
        'push_notifications' => 'boolean',
        'preferences' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
