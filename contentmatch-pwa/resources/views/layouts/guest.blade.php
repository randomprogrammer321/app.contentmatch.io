<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="theme-color" content="#000000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="ContentMatch">
    <meta name="HandheldFriendly" content="true" />

    <link rel="apple-touch-icon" href="{{ asset('assets/logo/logo-192x192.png') }}">
    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
  </head>
  <body class="bg-primary font-geist">
    <main id="content" class="flex h-dvh">
      @yield('content')
    </main>
    
    <script type="module" src="{{ asset('assets/js/signup.js') }}"></script>
    <script src="{{ asset('js/home/back-button.js') }}"></script>
    <script defer src="{{ asset('js/home/image-preview.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
