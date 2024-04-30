<li class="page">
    <a href="{{ $url }}"
       class="@if($active) active @endif"
       aria-label="{{ __('Go to page :page', ['page' => $page]) }}">{{ $page }}</a>
</li>
