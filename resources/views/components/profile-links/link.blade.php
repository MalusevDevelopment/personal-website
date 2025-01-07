<?php

declare(strict_types=1);

?>
<a class="profile-link"
   href="{{ $link }}"
   data-type="{{ $dataType }}"
   target="_blank"
   aria-label="{{ Str::title($icon) }}"
   rel="me noopener noreferrer"
>
    <x-svg :name="$icon"/>
</a><?php 
