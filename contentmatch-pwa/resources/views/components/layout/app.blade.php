<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'ContentMatch' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primary font-geist">
    <main class="h-screen flex overflow-auto flex-row">
        {{ $slot }}
    </main>
    
    @stack('scripts')
</body>
</html> 