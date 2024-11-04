<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/output.css') }}" rel="stylesheet" />
  </head>
  <body class="bg-primary font-geist">
    <main id="content" class="flex h-dvh">
      @yield('content')
    </main>
    <script type="module" src="{{ asset('assets/js/signup.js') }}"></script>
  </body>
</html>
