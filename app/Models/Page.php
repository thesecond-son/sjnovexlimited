<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'eyebrow',
        'headline',
        'intro',
        'body',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'og_image',
        'is_indexable',
    ];
    protected $casts = [
        'is_indexable' => 'boolean'
    ];
}
