<x-layouts.website>
    @section('css')
        @vite('resources/css/pages/blog.css')
    @endsection
    <header><h1 class="mt-0 text-4xl font-extrabold text-neutral">Blog</h1></header>
    <section class="mt-0 flex max-w-full flex-col prose-invert lg:flex-row">
        <div class="min-w-0 min-h-0 max-w-prose grow"></div>
    </section>
    <x-blog.articles-by-year year="2023"/>
    <x-blog.pagination/>
</x-layouts.website>
