<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-default-appearance="dark" class="dark">
<head>
    <meta charset="utf-8"/>
    <meta name="application-name" content="{{ config('app.name') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description"
          content="I'm an experienced remote software developer deeply passionate about creating efficient and elegant solutions"/>
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
            "dateCreated": "2023-12-23T12:34:00+01:00",
            "dateModified": "2024-01-21T15:11:00+01:00",
            "mainEntity": {
                "@type": "Person",
                "name": "Dusan Malusev",
                "alternateName": "{{ config('app.owner.github') }}",
                "identifier": "123475623",
                "description": "I'm an experienced remote software developer deeply passionate about creating efficient and elegant solutions. My journey involves honing skills through diverse projects, all crafted within the confines of my remote workspace.",
                "image": "https://avatars.githubusercontent.com/u/33778979",
                "sameAs": [
                  "https://github.com/{{ config('app.owner.github') }}",
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
    <link href="https://github.com/{{ config('app.owner.github') }}" rel="me"/>
    <link href="https://www.linkedin.com/in/malusevd998" rel="me"/>
    <link href="https://www.reddit.com/user/Back_Professional" rel="me"/>
    <link href="https://stackoverflow.com/users/8411483/dusan-malusev" rel="me"/>

    <title>Home Page - {{ config('app.name') }}</title>

    @if(($useLivewire ?? false))
        @livewireStyles
    @endif
    @vite('resources/css/website.css')

    @yield('css')
</head>

<body class="body">
<div class="inner">
    <x-header/>
    <div class="inner">
        <main class="grow">
            {{ $slot }}
        </main>
    </div>
    @include('components.footer')
    {{--    @include('components.search')--}}
</div>

@if(($useLivewire ?? false))
    @livewireScriptConfig
    @vite('resources/js/with-livewire.js')
@else
    @vite('resources/js/app.js')
@endif

@if(app()->environment('production'))
    <script defer
            src="{{ config('services.umami.script') }}"
            data-cache="true"
            data-domains="{{ config('app.domain') }}"
            data-website-id="{{ config('services.umami.id') }}"
            data-auto-track="false"
            nonce="{{ Vite::cspNonce() }}"
    />
@endif


</body>
</html>
