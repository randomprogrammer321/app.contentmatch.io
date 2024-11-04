<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_analytics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->integer('total_engagements')->default(0);
            $table->integer('total_feedback_received')->default(0);
            $table->integer('total_feedback_given')->default(0);
            $table->integer('total_matches')->default(0);
            $table->float('average_rating')->default(0);
            $table->json('platform_metrics')->nullable();
            $table->timestamp('period_start');
            $table->timestamp('period_end');
            $table->timestamps();
        });

        Schema::create('platform_analytics', function (Blueprint $table) {
            $table->id();
            $table->integer('total_users')->default(0);
            $table->integer('active_users')->default(0);
            $table->integer('total_communities')->default(0);
            $table->integer('total_content')->default(0);
            $table->integer('total_engagements')->default(0);
            $table->json('platform_distribution')->nullable();
            $table->timestamp('period_start');
            $table->timestamp('period_end');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('platform_analytics');
        Schema::dropIfExists('user_analytics');
    }
};
