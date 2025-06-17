<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-default-appearance="dark" class="dark">
<head>
    <meta charset="utf-8"/>
    <meta name="application-name" content="{{ config('app.name', 'Dusan\'s Website') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Dusan Malusev"/>
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#1e293b"/>
    {{ $meta ?? '' }}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link href="mailto:dusan@dusanmalusev.dev" rel="me"/>
    <link href="https://dev.to/malusev998" rel="me"/>
    <link href="https://github.com/{{ config('app.owner.github') }}" rel="me"/>
    <link href="https://www.linkedin.com/in/malusevd998" rel="me"/>
    <link href="https://www.reddit.com/user/Back_Professional" rel="me"/>
    <link href="https://stackoverflow.com/users/8411483/dusan-malusev" rel="me"/>

    <title>{{ $title ?? config('app.name', 'Dusan\'s Website') }}</title>

    {{ $ld ?? '' }}

    @if(($useLivewire ?? false))
        @livewireStyles
    @endif
    @vite('resources/css/website.css')

    {{ $css ?? '' }}
</head>

<body class="body">
<div class="inner">
    <x-header/>
    <div class="inner">
        <main class="grow">
            {{ $slot }}
        </main>
    </div>

    <x-footer/>
    <x-search.modal/>
</div>

@if(app()->environment('production'))
    <script defer
            src="{{ config('services.umami.script') }}"
            data-cache="true"
            data-domains="{{ config('app.domain') }}"
            data-website-id="{{ config('services.umami.id') }}"
            data-host-url="{{ config('services.umami.host') }}"
            data-auto-track="false"
    />
@endif

@if(($useLivewire ?? false))
    @livewireScriptConfig
    @vite('resources/js/with-livewire.js')
@else
    @vite('resources/js/app.js')
@endif

@auth()
    <script defer>
      umami.identify({id: '{{ auth()->user()->id }}', email: '{{ auth()->user()->email }}'});
    </script>
@endauth

{{ $scripts ?? '' }}
</body>
</html>
<?php 
