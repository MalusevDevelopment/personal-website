<article class="article">
    <div>
        <h3><a href="/blog">{{ $post->title }}</a></h3>
        <div class="article-footer">
            <div>
                <time datetime="{{ $post->created_at->format(DateTimeInterface::ATOM) }}">
                    {{ $post->created_at->format('d F Y') }}
                </time>
                <span class="article-sep">&#183;</span>
                {{--                <span title="Reading time">6 mins</span>--}}
                {{--                <span class="article-sep">&#183;</span>--}}
                {{--                <span title="Author">{{ $post->user?->name }}</span>--}}
            </div>
        </div>
    </div>
</article>
