<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('community_rule_templates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('category'); // moderation, content, behavior, etc
            $table->integer('order')->default(0);
            $table->boolean('is_default')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Add is_template and template_id to existing community_rules table
        Schema::table('community_rules', function (Blueprint $table) {
            $table->boolean('is_custom')->default(true);
            $table->foreignId('template_id')->nullable()->constrained('community_rule_templates');
        });
    }

    public function down(): void
    {
        Schema::table('community_rules', function (Blueprint $table) {
            $table->dropForeign(['template_id']);
            $table->dropColumn(['is_custom', 'template_id']);
        });
        Schema::dropIfExists('community_rule_templates');
    }
};
