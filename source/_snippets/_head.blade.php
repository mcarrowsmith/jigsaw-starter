@php
    $htmlTitle = ($page->title ? $page->title . ' — ' : '') . $page->siteName;
    //$socialCardUrl = rtrim($page->baseUrl, '/') . mix('images/mcarrowsmith-consulting-social-card.png', 'assets');--}}
    $socialCardUrl = rtrim($page->baseUrl, '/');
@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <title>{{ $htmlTitle }}</title>
    <meta name="title" content="{{ $htmlTitle }}">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:locale" content="en_GB">
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:site_name" content="{{ $page->siteName }}"/>
    <meta property="og:title" content="{{ $htmlTitle }}"/>
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />
    <meta property="og:image" content="{{ $socialCardUrl }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ $page->getUrl() }}">
    <meta property="twitter:title" content="{{ $htmlTitle }}">
    <meta property="twitter:description" content="{{ $page->description ?? $page->siteDescription }}">
    <meta property="twitter:image" content="{{ $socialCardUrl }}">

    <link rel="stylesheet" href="{{ mix('css/app.css', 'assets') }}">
    <script defer src="{{ mix('js/app.js', 'assets') }}"></script>
    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.png">
</head>
@php
    unset($htmlTitle, $socialCardUrl);
@endphp