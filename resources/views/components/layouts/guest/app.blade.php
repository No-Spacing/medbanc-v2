<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.4.0/esm/ionicons.min.js"></script>
        {{-- Montserrat Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="icon" type="image/x-icon" href="/images/brands/medbanc.ico">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <title>{{ $title ?? 'Medbanc Inc.' }}</title>
    </head>
    <body class="font-montserrat">
        <header class="absolute inset-x-0 top-0 z-50">
            @include('components.layouts.guest.navbar')
        </header>
        {{ $slot }}
        @include('components.layouts.guest.footer')
    </body>
</html>
