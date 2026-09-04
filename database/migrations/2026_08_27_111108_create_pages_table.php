<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pages', function (Blueprint $table) {
        $table->id();
        $table->string('slug')->unique();      // home | about | services | contact
        $table->string('title');                // internal label shown in Filament
        $table->string('eyebrow')->nullable();   // small label above headline
        $table->string('headline')->nullable();
        $table->text('intro')->nullable();       // hero / intro paragraph
        $table->longText('body')->nullable();    // rich content (About bio, etc.)

        // SEO
        $table->string('meta_title')->nullable();
        $table->string('meta_description', 320)->nullable();
        $table->string('meta_keywords')->nullable();
        $table->string('canonical_url')->nullable();
        $table->string('og_image')->nullable();  // falls back to media library
        $table->boolean('is_indexable')->default(true);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
