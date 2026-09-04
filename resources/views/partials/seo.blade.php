<title>{{ $page->meta_title ?? $page->title }}</title>
<meta name="description" content="{{ $page->meta_description }}">
@if($page->meta_keywords)<meta name="keywords" content="{{ $page->meta_keywords }}">@endif
<link rel="canonical" href="{{ $page->canonical_url ?? url()->current() }}">
@unless($page->is_indexable)<meta name="robots" content="noindex,nofollow">@endunless

<meta property="og:type" content="website">
<meta property="og:title" content="{{ $page->meta_title ?? $page->title }}">
<meta property="og:description" content="{{ $page->meta_description }}">
<meta property="og:url" content="{{ url()->current() }}">
@if($page->og_image)<meta property="og:image" content="{{ Storage::url($page->og_image) }}">@endif
<meta name="twitter:card" content="summary_large_image">