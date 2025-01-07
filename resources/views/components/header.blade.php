<?php

declare(strict_types=1);

?>
<header class="header">
    <nav class="nav">
        <div class="home">
            <a rel="me" href="{{ route('index') }}">dusanmalusev.dev</a>
        </div>
        <label id="menu-button" for="menu-controller" class="block sm:hidden">
            <input type="checkbox" id="menu-controller" class="hidden">
            <div class="icon-wrapper">
                <x-svg name="sm-hamburger-menu"/>
            </div>
            <div id="menu-wrapper" class="sm:menu">
                <ul>
                    <li class="mb-1">
                      <span class="icon-wrapper">
                        <x-svg name="close"/>
                      </span>
                    </li>
                    <x-nav.search-button/>
                    @foreach($links as $name => $route)
                        <x-nav.item :link="$route" :title="$name"/>
                    @endforeach
                </ul>
            </div>
        </label>

        <ul>
            @foreach($links as $name => $route)
                <x-nav.item :link="$route" :title="$name"/>
            @endforeach
            <x-nav.search-button/>
        </ul>
    </nav>
</header>
<?php 
