<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <title>{{ $title ?? 'Admin' }}</title>
        <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
        <script>
            window.onload = () => lucide.createIcons();
        </script>
    </head>
    <body>
        {{ $slot }}
    </body>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>
