<li class="mx-1 min-w-[1.8rem] text-center">
    @if($active)
        <span aria-current=page aria-label="Page 1"
              class="block font-semibold rounded bg-primary-200 text-primary-700 dark:bg-primary-400 dark:text-neutral-800">{{ $page }}</span>
    @else
        <a href="/blog/{{ $page }}" class="block rounded hover:bg-primary-600 hover:text-neutral"
           aria-label="Page 2">{{ $page }}</a>
    @endif
</li>
