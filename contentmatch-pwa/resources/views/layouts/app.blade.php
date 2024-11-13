<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title')</title>
    
    {{-- PWA Meta Tags --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#000000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="ContentMatch">
    <link rel="apple-touch-icon" href="{{ asset('assets/logo/logo-192x192.png') }}">
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    @livewireStyles

    @include('components.global.meta-tags')
    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
    @stack('styles')
</head>
<body class="bg-primary font-geist">
    {{-- Global Modals --}}
    @include('components.global.modals')

    <main id="content" class="h-screen flex overflow-auto flex-row">
        {{-- Main Sidebar --}}
        @include('components.global.sidebar')

        {{-- Main Content --}}
        <div class="flex-1 flex">
            @yield('content')
        </div>

        {{-- Global Right Sidebar --}}
        @include('components.global.right-sidebar')
    </main>

    {{-- Mobile Navigation --}}
    @include('components.global.mobile-nav')

    {{-- Service Worker Registration Script --}}
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('ServiceWorker registered: ', registration);
                    })
                    .catch(error => {
                        console.log('ServiceWorker registration failed: ', error);
                    });
            });
        }
    </script>

    {{-- Scripts --}}
    <script type="module" src="{{ asset('js/home.js') }}"></script>
    <script defer src="{{ asset('js/home/side-bar.js') }}"></script>
    <script src="{{ asset('js/home/back-button.js') }}"></script>
    <script defer src="{{ asset('js/home/create-post.js') }}"></script>
    <script defer src="{{ asset('js/home/create-community.js') }}"></script>
    <script defer src="{{ asset('js/home/engagement-dialog.js') }}"></script>
    <script defer src="{{ asset('js/home/image-preview.js') }}"></script>
    <script defer src="{{ asset('js/home/feedback-dialog.js') }}"></script>
    <script defer src="{{ asset('js/home/report-video-dialog.js') }}"></script>
    <script defer src="{{ asset('js/home/subscribe.js') }}"></script>
    <script defer src="{{ asset('js/home/post.js') }}"></script>
    <script defer src="https://js.stripe.com/v3/" ></script>
    @livewireScripts

    @stack('scripts')
</body>
</html>
