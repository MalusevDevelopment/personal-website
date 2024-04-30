<section class="blog">
    <h2><a href="/blog?year={{ $year }}">
            {{ $year }}</a></h2>
    <hr/>
    @foreach($posts as $post)
        <x-blog.article :post="$post"/>
    @endforeach
</section>
