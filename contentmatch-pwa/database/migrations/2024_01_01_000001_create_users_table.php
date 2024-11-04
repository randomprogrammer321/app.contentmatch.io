<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('full_name')->nullable();
            $table->text('bio')->nullable();
            $table->string('profile_image_url')->nullable();
            $table->string('banner_url')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender', ['M', 'F', 'OTHER'])->nullable();
            $table->boolean('is_verified')->default(false);
            $table->enum('status', ['active', 'suspended', 'banned'])->default('active');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_active_at')->nullable();
            $table->timestamp('onboarding_completed_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });


    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

        