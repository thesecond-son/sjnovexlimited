<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tag\Url;

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create();
    foreach (['home','about','services','contact'] as $slug) {
        $page = \App\Models\Page::where('slug', $slug)->first();
        if (!$page?->is_indexable) continue;
        $sitemap->add(Url::create($slug === 'home' ? '/' : "/$slug")
            ->setLastModificationDate($page->updated_at));
    }
    return $sitemap->toResponse(request());
});