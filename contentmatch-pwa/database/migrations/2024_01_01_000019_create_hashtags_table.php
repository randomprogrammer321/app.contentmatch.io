<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hashtags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('usage_count')->default(0);
            $table->boolean('is_trending')->default(false);
            $table->timestamps();
        });

        Schema::create('hashtaggables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hashtag_id')->constrained()->cascadeOnDelete();
            $table->morphs('hashtaggable');
            $table->timestamps();
            
            $table->unique(['hashtag_id', 'hashtaggable_id', 'hashtaggable_type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hashtaggables');
        Schema::dropIfExists('hashtags');
    }
};
