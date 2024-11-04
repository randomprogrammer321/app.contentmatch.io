<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('community_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('community_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->enum('role', ['admin', 'moderator', 'member'])->default('member');
            $table->enum('status', ['active', 'banned'])->default('active');
            $table->timestamp('last_activity_at')->nullable();
            $table->timestamps();
            $table->unique(['community_id', 'user_id']);
        });

        Schema::create('community_engagement_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('community_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->integer('engagement_score')->default(0);
            $table->integer('participation_rate')->default(0);
            $table->timestamp('period_start');
            $table->timestamp('period_end');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('community_engagement_scores');
        Schema::dropIfExists('community_members');
    }
};
