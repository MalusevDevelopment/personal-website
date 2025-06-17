<x-layouts.website>
    <x-slot:title>Home | {{ config('app.name', 'Dusan\'s Website') }}</x-slot:title>

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
        @vite('resources/css/pages/home.css')
    </x-slot:css>

    <x-slot:ld>
        @ld('home')
    </x-slot:ld>

    <article class="profile">
        <header>
            <img width="48" height="48" decoding="async" alt="Dusan Malusev"
                 src="{{ asset('images/me.jpeg') }}"
                 loading="lazy"
            />
            <h1>Dusan Malusev</h1>
            <h2>Senior Software Developer</h2>
            <div class="links">
                <x-profile-links/>
            </div>
        </header>
        <section class="about"><br>
            Greetings 👋!
            <p>
                I'm an experienced remote software developer deeply passionate about creating efficient
                and elegant solutions. My journey involves honing skills through diverse projects, all crafted
                within the confines of my remote workspace.
            </p>

            <p>
                As an enthusiastic contributor and maintainer in the
                open source community, I firmly believe in the power of collaboration and giving back. Specializing
                in the Go, Rust, and PHP programming languages, I thrive on the challenges and opportunities they
                present. Join me in shaping the digital landscape, and let's build something remarkable together!
            </p>

        </section>
        <section class="about mt-5">
            <p>
                If you find value in my work and would like to support ongoing projects, consider becoming a
                sponsor.
            </p>
            <div>
                <iframe
                        src="https://github.com/sponsors/{{ config('app.owner.github') }}/card"
                        title="Sponsor {{ config('app.owner.github') }}"
                        style="border: 0;"
                        class="w-full"
                ></iframe>
            </div>
        </section>
    </article>
</x-layouts.website>
