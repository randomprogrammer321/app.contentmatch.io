<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reporter_id')->constrained('users');
            $table->morphs('reportable');
            $table->string('reason');
            $table->text('description')->nullable();
            $table->enum('status', ['pending', 'reviewing', 'resolved', 'dismissed'])->default('pending');
            $table->foreignId('resolved_by')->nullable()->constrained('users');
            $table->text('resolution_notes')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blocker_id')->constrained('users');
            $table->foreignId('blocked_id')->constrained('users');
            $table->text('reason')->nullable();
            $table->timestamps();
            $table->unique(['blocker_id', 'blocked_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blocks');
        Schema::dropIfExists('reports');
    }
};
