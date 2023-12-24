<div id="search-wrapper"
     class="invisible fixed inset-0 z-50 flex h-screen w-screen cursor-default flex-col bg-neutral-500/50 p-4 backdrop-blur-sm dark:bg-neutral-900/50 sm:p-6 md:p-[10vh] lg:p-[12vh]"
     data-url="//localhost:1313/">
    <div id="search-modal"
         class="flex flex-col w-full max-w-3xl min-h-0 mx-auto border rounded-md shadow-lg top-20 border-neutral-200 bg-neutral dark:border-neutral-700 dark:bg-neutral-800">
        <header class="relative z-10 flex items-center justify-between flex-none px-2">
            <form class="flex items-center flex-auto min-w-0">
                <div class="flex items-center justify-center w-8 h-8 text-neutral-400">
          <span class="relative inline-block align-text-bottom px-1 icon"><svg aria-hidden="true" focusable="false"
                                                                               data-prefix="fas" data-icon="search"
                                                                               class="svg-inline--fa fa-search fa-w-16"
                                                                               role="img"
                                                                               xmlns="http://www.w3.org/2000/svg"
                                                                               viewBox="0 0 512 512"><path
                      fill="currentColor"
                      d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
</span>
                </div>
                <input type="search" id="search-query"
                       class="flex flex-auto h-12 mx-1 bg-transparent appearance-none focus:outline-dotted focus:outline-2 focus:outline-transparent"
                       placeholder="Search" tabindex="0">
            </form>
            <button id="close-search-button"
                    class="flex items-center justify-center w-8 h-8 text-neutral-700 hover:text-primary-600 dark:text-neutral dark:hover:text-primary-400"
                    title="Close (Esc)">
        <span class="relative inline-block align-text-bottom px-1 icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                                             viewBox="0 0 320 512"><path
                    fill="currentColor"
                    d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg>
</span>
            </button>
        </header>
        <section class="flex-auto px-2 overflow-auto">
            <ul id="search-results">

            </ul>
        </section>
    </div>
</div>
