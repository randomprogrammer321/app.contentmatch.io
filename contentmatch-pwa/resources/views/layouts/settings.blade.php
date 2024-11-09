
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name') }}</title>
    
    {{-- PWA Meta Tags --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#000000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="ContentMatch">
    <link rel="apple-touch-icon" href="{{ asset('assets/logo/logo-192x192.png') }}">
    
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
     
        @include('components.settings.sidebar')
        {{-- Main Content --}}
        
        <div class="flex-1 flex">
            @yield('settings-content')
        </div>
        </section>

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

    <script src="{{ asset('js/home/subscribe.js') }}"></script>
    <script src="https://js.stripe.com/v3/" defer></script>
    <script src="{{ asset('js/home/image-preview.js') }}"></script>
    <script src="{{ asset('js/home/side-bar.js') }}"></script>

    @stack('scripts')
</body>
</html>
