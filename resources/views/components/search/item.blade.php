<?php

declare(strict_types=1);

?>
@foreach($items as $item)
    <li>
        <a href="{{ $item->url }}" tabindex="0">
            <div class="grow">
                <div>{{ $item->title }}</div>
                <div>{{ $item->summary }}</div>
            </div>
            <div>&rarr;</div>
        </a>
    </li>
@endforeach<?php 
