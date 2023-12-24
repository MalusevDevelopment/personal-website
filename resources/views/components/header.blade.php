<header class="py-6 font-semibold text-neutral-900 dark:text-neutral print:hidden sm:py-10">
    <nav class="flex items-start justify-between sm:items-center">
        <div class="z-40 flex flex-row items-center">
            <a class="decoration-primary-500 hover:underline hover:decoration-2 hover:underline-offset-2" rel="me"
               href="/">Dusan Malusev</a>
        </div>
        <label id="menu-button" for="menu-controller" class="block sm:hidden">
            <input type="checkbox" id="menu-controller" class="hidden">
            <div class="cursor-pointer hover:text-primary-600 dark:hover:text-primary-400">
            <span class="relative inline-block align-text-bottom px-1 icon">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 448 512"><path
                        fill="currentColor"
                        d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path>
                </svg>
            </span>
            </div>
            <div id="menu-wrapper"
                 class="fixed inset-0 z-30 invisible w-full h-full m-auto overflow-auto transition-opacity opacity-0 cursor-default bg-neutral-100/50 backdrop-blur-sm dark:bg-neutral-900/50">
                <ul class="flex flex-col w-full px-6 py-6 mx-auto overflow-visible list-none max-w-7xl text-end sm:px-14 sm:py-10 sm:pt-10 md:px-24 lg:px-32">
{{--                    <li class="mb-1">--}}
{{--                      <span class="cursor-pointer hover:text-primary-600 dark:hover:text-primary-400">--}}
{{--                          <span--}}
{{--                              class="relative inline-block align-text-bottom px-1 icon">--}}
{{--                              <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                   viewBox="0 0 320 512"><path--}}
{{--                                      fill="currentColor"--}}
{{--                                      d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path>--}}
{{--                              </svg>--}}
{{--                          </span>--}}
{{--                      </span>--}}
{{--                    </li>--}}
                    <li class="mb-1 group">
                        <button id="search-button-1" title="Search (/)">
                          <span
                              class="transition-colors group-dark:hover:text-primary-400 group-hover:text-primary-600">
                              <span
                                  class="relative inline-block align-text-bottom px-1 icon">
                                  <svg aria-hidden="true"
                                       focusable="false"
                                       data-prefix="fas"
                                       data-icon="search"
                                       class="svg-inline--fa fa-search fa-w-16"
                                       role="img"
                                       xmlns="http://www.w3.org/2000/svg"
                                       viewBox="0 0 512 512"><path
                                          fill="currentColor"
                                          d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                  </svg>
                              </span>
                          </span>
                            <span
                                class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">
                            </span>
                        </button>
                    </li>
                </ul>
            </div>
        </label>

        <ul class="flex-row hidden list-none text-end sm:flex">
{{--            <li class="mb-1 group sm:mb-0 sm:me-7 sm:last:me-0">--}}
{{--                <a href="" title=""><span--}}
{{--                        class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">Blog</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="mb-1 group sm:mb-0 sm:me-7 sm:last:me-0">--}}
{{--                <a href="/categories/" title="Categories"><span--}}
{{--                        class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">Categories</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="mb-1 group sm:mb-0 sm:me-7 sm:last:me-0">
                <button id="search-button-2" title="Search (/)">
                      <span
                          class="transition-colors group-dark:hover:text-primary-400 group-hover:text-primary-600">
                          <span class="relative inline-block align-text-bottom px-1 icon">
                              <svg aria-hidden="true"
                                   focusable="false"
                                   data-prefix="fas"
                                   data-icon="search"
                                   class="svg-inline--fa fa-search fa-w-16"
                                   role="img"
                                   xmlns="http://www.w3.org/2000/svg"
                                   viewBox="0 0 512 512"><path
                                      fill="currentColor"
                                      d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                              </svg>
                          </span>
                      </span>
                    <span
                        class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">
                    </span>
                </button>
            </li>
        </ul>
    </nav>
</header>
