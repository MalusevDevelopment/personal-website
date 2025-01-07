<?php

declare(strict_types=1);

?>
<x-layouts.website>
    @section('css')
        @vite('resources/css/pages/blog.css')
    @endsection

    <header>
        <h1>Blog</h1>
    </header>

    @foreach($groups as $year => $posts)
        <x-blog.articles-by-year :year="$year" :posts="$posts"/>
    @endforeach

    {{ $paginator->onEachSide(1)->links() }}
</x-layouts.website>
<?php 
