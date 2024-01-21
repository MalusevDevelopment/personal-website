<x-layouts.website>
    @section('css')
        @vite('resources/css/pages/home.css')
    @endsection
    <main id="main-content" class="grow">
        <article class="h-full flex flex-col items-center justify-center text-center">
            <header class="mb-3 flex flex-col items-center">
                <img
                        class="mb-2 h-36 w-36 rounded-full"
                        width="36"
                        height="36"
                        decoding="async"
                        alt="Dusan Malusev"
                        src="{{ asset('images/me.jpeg') }}"
                />
                <h1 class="text-4xl font-extrabold">
                    Dusan Malusev
                </h1>
                <h2 class="text-xl text-neutral-500 dark:text-neutral-400">
                    Senior Software Developer
                </h2>
                <div class="mt-1 text-2xl">
                    <x-profile-links/>
                </div>
            </header>
            <section class="prose-lg dark:prose-invert"><br>
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
            <section class="prose-lg dark:prose-invert mt-5">
                <p>
                    If you find value in my work and would like to support ongoing projects, consider becoming a
                    sponsor.
                </p>

                <div class="w-full">
                    <iframe
                            src="https://github.com/sponsors/dmalusev/card"
                            title="Sponsor dmalusev"
                            style="border: 0;"
                            class="w-full"
                    ></iframe>
                </div>

            </section>
        </article>
    </main>
</x-layouts.website>