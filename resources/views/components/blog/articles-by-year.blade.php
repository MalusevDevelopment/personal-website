<section>
    <h2 class="mt-12 text-2xl font-bold text-neutral-700 first:mt-8 text-neutral-300">{{ $year }}</h2>
    <hr class="border-dotted w-36 border-neutral-400">
    @foreach($posts as $post)
        <x-blog.article/>
    @endforeach
</section>
