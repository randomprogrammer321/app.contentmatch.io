<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('search_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('query');
            $table->string('type')->nullable(); // users, content, communities
            $table->json('filters')->nullable();
            $table->integer('results_count');
            $table->timestamps();
        });

        Schema::create('trending_searches', function (Blueprint $table) {
            $table->id();
            $table->string('query');
            $table->integer('search_count');
            $table->timestamp('period_start');
            $table->timestamp('period_end');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trending_searches');
        Schema::dropIfExists('search_logs');
    }
};
