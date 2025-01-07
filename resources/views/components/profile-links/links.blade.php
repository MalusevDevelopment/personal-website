<?php

declare(strict_types=1);

?>
<div class="flex flex-wrap text-neutral-500">
    @foreach($links as $link)
        <x-profile-links.link
                :data-type="$link['dataType']"
                :icon="$link['icon']"
                :link="$link['href']"
        />
    @endforeach
</div>
<?php 
