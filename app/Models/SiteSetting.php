<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'business_name',
        'phone',
        'whatsapp_number',
        'whatsapp_default_message',
        'email',
        'address',
        'service_area',
        'facebook_url',
        'instagram_url',
        'tiktok_url_personal',
        'tiktok_url_business','logo_path',
    ];

    // Always work with a single row
    public static function current(): self
    {
        return static::query()->firstOrCreate(['id' => 1]);
    }
}