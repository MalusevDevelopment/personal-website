<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    @livewireStyles
    @vite(['resources/css/app.css'])
</head>
<body class="font-sans antialiased">
<main>
    {{ $slot }}
</main>

<script async defer src="{{ config('umami.script') }}" data-website-id="{{ config('umami.id') }}"></script>
@livewireScriptConfig
@vite(['resources/js/app.js'])
</body>
</html>
