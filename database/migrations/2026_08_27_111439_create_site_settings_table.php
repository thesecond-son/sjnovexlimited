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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('business_name')->default('SJ Novex Limited');
            $table->string('phone')->nullable();
            $table->string('whatsapp_number')->nullable();       // 2348031351449 format
            $table->string('whatsapp_default_message')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();                 // "Jibowu, Lagos State, Nigeria"
            $table->string('service_area')->nullable();             // "Nationwide + Accra, Ghana"
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('tiktok_url_personal')->nullable();
            $table->string('tiktok_url_business')->nullable();
            $table->string('logo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
