<div id="search-wrapper">
    <div id="search-modal">
        <header>
            <form>
                <div>
                    <x-svg name="search"/>
                </div>
                <input type="search" id="search-query" placeholder="Search" tabindex="0"/>
            </form>
            <button id="close-search-button" title="Close (Esc)">
                <x-svg name="close"/>
            </button>
        </header>
        <section>
            <ul id="search-results">
                <x-search.item/>
                <x-search.item/>
                <x-search.item/>
                <x-search.item/>
                <x-search.item/>
            </ul>
        </section>
    </div>
</div>
