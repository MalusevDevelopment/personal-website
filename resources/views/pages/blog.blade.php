<x-layouts.website>
    <x-slot:title>Blog | {{ config('app.name', 'Dusan\'s Website') }}</x-slot:title>

    <x-slot:meta>
        <meta name="description"
              content="I'm an experienced remote software developer deeply passionate about creating efficient and elegant solutions"/>
        <meta property="og:title" content="Dusan's Website"/>
        <meta property="og:description"
              content="I'm an experienced remote software developer deeply passionate about creating efficient and elegant solutions"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="{{ config('app.url') }}"/>
        <meta name="twitter:card" content="Dusan's Website"/>
        <meta name="twitter:title" content="Dusan's Website"/>
        <meta name="twitter:description"
              content="I'm an experienced remote software developer deeply passionate about creating efficient and elegant solutions"/>
    </x-slot:meta>

    <x-slot:css>
        @vite('resources/css/pages/blog.css')
    </x-slot:css>

    <x-slot:ld>
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
    </x-slot:ld>


    <header>
        <h1>Blog</h1>
    </header>

    @foreach($groups as $year => $posts)
        <x-blog.articles-by-year :year="$year" :posts="$posts"/>
    @endforeach

    {{ $paginator->onEachSide(1)->links() }}
</x-layouts.website>
<?php 
