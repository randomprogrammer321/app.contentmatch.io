<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('match_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->json('preferred_categories');
            $table->json('preferred_platforms');
            $table->timestamps();
        });

        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('initiator_id')->constrained('users');
            $table->foreignId('receiver_id')->constrained('users');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamp('matched_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matches');
        Schema::dropIfExists('match_preferences');
    }
};
