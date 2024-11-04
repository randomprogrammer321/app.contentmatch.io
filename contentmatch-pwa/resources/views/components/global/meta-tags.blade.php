{{-- Primary Meta Tags --}}
<meta name="title" content="@yield('meta_title', config('app.name'))">
<meta name="description" content="@yield('meta_description', 'Connect with content creators, grow your audience, and boost engagement on ContentMatch')">
<meta name="keywords" content="@yield('meta_keywords', 'content creators, social media, engagement, collaboration, growth')">
<meta name="author" content="{{ config('app.name') }}">

{{-- Open Graph / Facebook --}}
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="@yield('og_title', config('app.name'))">
<meta property="og:description" content="@yield('og_description', 'Connect with content creators, grow your audience, and boost engagement on ContentMatch')">
<meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
<meta property="og:site_name" content="{{ config('app.name') }}">

{{-- Twitter --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="@yield('twitter_title', config('app.name'))">
<meta name="twitter:description" content="@yield('twitter_description', 'Connect with content creators, grow your audience, and boost engagement on ContentMatch')">
<meta name="twitter:image" content="@yield('twitter_image', asset('images/twitter-default.jpg'))">

{{-- Mobile Meta --}}
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
<meta name="theme-color" content="#000000">

{{-- Favicon --}}
<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

{{-- PWA Manifest --}}
<link rel="manifest" href="{{ asset('manifest.json') }}">

{{-- Canonical URL --}}
<link rel="canonical" href="{{ url()->current() }}">

{{-- Additional Meta Tags --}}
<meta name="robots" content="index, follow">
<meta name="format-detection" content="telephone=no">
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="{{ config('app.name') }}">
