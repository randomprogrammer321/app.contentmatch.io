<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feed_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->morphs('feedable');
            $table->enum('type', ['content', 'community', 'match', 'collaboration']);
            $table->json('metadata')->nullable();
            $table->boolean('is_pinned')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->timestamp('published_at');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('feed_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->json('content_types')->nullable();
            $table->json('platform_preferences')->nullable();
            $table->json('category_preferences')->nullable();
            $table->boolean('show_following_only')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feed_preferences');
        Schema::dropIfExists('feed_items');
    }
};
