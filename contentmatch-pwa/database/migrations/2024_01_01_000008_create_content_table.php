<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('community_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('platform_id')->constrained();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('platform_content_id');
            $table->string('platform_content_url');
            $table->boolean('allow_feedback')->default(true);
            $table->boolean('allow_engagement')->default(true);
            $table->enum('status', ['active', 'archived', 'reported', 'removed'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('content_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->constrained()->cascadeOnDelete();
            $table->string('tag');
            $table->timestamps();
        });

        Schema::create('content_metrics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->constrained()->cascadeOnDelete();
            $table->integer('views_count')->default(0);
            $table->integer('likes_count')->default(0);
            $table->integer('comments_count')->default(0);
            $table->integer('shares_count')->default(0);
            $table->integer('engagement_rate')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('content_metrics');
        Schema::dropIfExists('content_tags');
        Schema::dropIfExists('content');
    }
};
