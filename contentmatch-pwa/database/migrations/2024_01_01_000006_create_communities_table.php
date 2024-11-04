<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->foreignId('owner_id')->constrained('users');
            $table->enum('type', ['public', 'private']);
            $table->string('banner_url')->nullable();
            $table->enum('status', ['active', 'archived', 'suspended'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('community_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('community_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        Schema::create('community_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('community_id')->constrained()->cascadeOnDelete();
            $table->integer('daily_post_limit')->nullable();
            $table->integer('weekly_engagement_requirement')->nullable();
            $table->integer('min_engagement_to_post')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('community_settings');
        Schema::dropIfExists('community_rules');
        Schema::dropIfExists('communities');
    }
};
