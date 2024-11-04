<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->boolean('show_email')->default(false);
            $table->boolean('show_stats')->default(true);
            $table->boolean('allow_messages')->default(true);
            $table->boolean('allow_mentions')->default(true);
            $table->json('notification_preferences')->nullable();
            $table->json('feed_preferences')->nullable();
            $table->json('privacy_settings')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_preferences');
    }
};
