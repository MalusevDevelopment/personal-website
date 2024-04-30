<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">
    <ul>
        @if ($paginator->hasPages())
            @unless($paginator->onFirstPage())
                <x-pagination.previous :prev="$paginator->previousPageUrl()"/>
            @endunless

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>&ctdot;</li>
                @elseif(is_array($element))
                    @foreach ($element as $page => $url)
                        <x-pagination.page :url="$url" :active="$page === $paginator->currentPage()"
                                           :page="$page"/>
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <x-pagination.next :next="$paginator->nextPageUrl()"/>
            @endif
        @else
            <x-pagination.page :url="$paginator->url(1)" :active="true"
                               :page="1"/>
        @endif
    </ul>
</nav>