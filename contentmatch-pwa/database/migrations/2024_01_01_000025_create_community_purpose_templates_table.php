<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('community_purpose_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('icon_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Add template_id to communities table
        Schema::table('communities', function (Blueprint $table) {
            $table->foreignId('purpose_template_id')->nullable()->constrained('community_purpose_templates');
            $table->boolean('has_custom_purpose')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('communities', function (Blueprint $table) {
            $table->dropForeign(['purpose_template_id']);
            $table->dropColumn(['purpose_template_id', 'has_custom_purpose']);
        });
        Schema::dropIfExists('community_purpose_templates');
    }
};
