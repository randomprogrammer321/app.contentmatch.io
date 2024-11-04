<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('engagements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('content_id')->constrained()->cascadeOnDelete();
            $table->boolean('did_engage')->default(false);
            $table->boolean('did_subscribe')->default(false);
            $table->boolean('did_like')->default(false);
            $table->boolean('did_comment')->default(false);
            $table->text('additional_comments')->nullable();
            $table->string('proof_image_url')->nullable();
            $table->timestamps();
        });

        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('content_id')->constrained()->cascadeOnDelete();
            $table->integer('rating');
            $table->text('liked_aspects');
            $table->text('improvement_aspects')->nullable();
            $table->string('proof_image_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedback');
        Schema::dropIfExists('engagements');
    }
};
