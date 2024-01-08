<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-default-appearance="dark" class="dark">
<head>
    <meta charset="utf-8"/>
    <meta name="application-name" content="{{ config('app.name') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#ffffff"/>
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#1e293b"/>
    <meta property="og:title" content="Dusan Malusev"/>
    <meta property="og:description" content="Dusan's Website"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ config('app.url') }}"/>
    <meta name="twitter:card" content="Dusan's Website"/>
    <meta name="twitter:title" content="Dusan Malusev"/>
    <meta name="twitter:description" content="My awesome website"/>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfilePage",
            "dateCreated": "2019-12-23T12:34:00-05:00",
            "dateModified": "2019-12-26T14:53:00-05:00",
            "mainEntity": {
                "@type": "Person",
                "name": "Dusan Malusev",
                "alternateName": "dmalusev",
                "identifier": "123475623",
                "description": "Senior Software Developer at NanoInteractive",
                "image": "https://avatars.githubusercontent.com/u/33778979",
                "sameAs": [
                  "https://github.com/dmalusev",
                  "https://dev.to/malusev998",
                  "https://www.linkedin.com/in/malusevd998",
                  "https://www.reddit.com/user/Back_Professional",
                  "https://stackoverflow.com/users/8411483/dusan-malusev"
                ]
            }
        }
    </script>
    <meta name="author" content="Dusan Malusev"/>
    <link href="mailto:dusan@dusanmalusev.dev" rel="me"/>
    <link href="https://dev.to/malusev998" rel="me"/>
    <link href="https://github.com/dmalusev" rel="me"/>
    <link href="https://www.linkedin.com/in/malusevd998" rel="me"/>
    <link href="https://www.reddit.com/user/Back_Professional" rel="me"/>
    <link href="https://stackoverflow.com/users/8411483/dusan-malusev" rel="me"/>

    <title>{{ config('app.name') }}</title>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @if(($useLivewire ?? false))
        @livewireStyles
    @endif
    @vite('resources/css/website.css')
</head>

<body
        class="antialiased flex flex-col h-screen px-6 m-auto text-lg leading-7 max-w-7xl bg-neutral text-neutral-900 dark:bg-neutral-800 dark:text-neutral sm:px-14 md:px-24 lg:px-32">
<div class="relative flex flex-col grow">
    @include('components.header')
    {{ $slot }}
    @include('components.footer')
    @include('components.search')
</div>

<script defer
        src="{{ config('umami.script') }}"
        data-cache="true"
        data-domains="{{ config('app.domain') }}"
        data-website-id="{{ config('umami.id') }}"
        data-auto-track="false"
        nonce="{{ Vite::cspNonce() }}"
></script>

@if(($useLivewire ?? false))
    @livewireScriptConfig
    @vite('resources/js/with-livewire.js')
@else
    @vite('resources/js/app.js')
@endif

</body>
</html>
