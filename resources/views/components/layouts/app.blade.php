<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="application-name" content="{{ config('app.name') }} - Dashboard"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>{{ config('app.name') }} - Dashboard</title>

    @livewireStyles
    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body
        class="antialiased flex flex-col h-screen px-6 m-auto text-lg leading-7 max-w-7xl bg-neutral text-neutral-900 dark:bg-neutral-800 dark:text-neutral sm:px-14 md:px-24 lg:px-32">
<div id="the-top" class="absolute flex self-center">
    <a class="px-3 py-1 text-sm -translate-y-8 rounded-b-lg bg-primary-200 focus:translate-y-0 dark:bg-neutral-600"
       href="#main-content"><span class="font-bold pe-2 text-primary-600 dark:text-primary-400">↓</span>Skip to main
        content</a>
</div>
<header class="py-6 font-semibold text-neutral-900 dark:text-neutral print:hidden sm:py-10">
    <nav class="flex items-start justify-between sm:items-center">

        <div class="z-40 flex flex-row items-center">

            <a class="decoration-primary-500 hover:underline hover:decoration-2 hover:underline-offset-2" rel="me"
               href="/">Congo</a>

        </div>


        <label id="menu-button" for="menu-controller" class="block sm:hidden">
            <input type="checkbox" id="menu-controller" class="hidden">
            <div class="cursor-pointer hover:text-primary-600 dark:hover:text-primary-400">
          <span class="relative inline-block align-text-bottom px-1 icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                                               viewBox="0 0 448 512"><path
                          fill="currentColor"
                          d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path></svg>
</span>
            </div>
            <div id="menu-wrapper"
                 class="fixed inset-0 z-30 invisible w-full h-full m-auto overflow-auto transition-opacity opacity-0 cursor-default bg-neutral-100/50 backdrop-blur-sm dark:bg-neutral-900/50">
                <ul class="flex flex-col w-full px-6 py-6 mx-auto overflow-visible list-none max-w-7xl text-end sm:px-14 sm:py-10 sm:pt-10 md:px-24 lg:px-32">
                    <li class="mb-1">
              <span class="cursor-pointer hover:text-primary-600 dark:hover:text-primary-400"><span
                          class="relative inline-block align-text-bottom px-1 icon"><svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 320 512"><path
                                  fill="currentColor"
                                  d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg>
</span></span>
                    </li>


                    <li class="mb-1 group">

                        <a href="" title=""><span
                                    class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">Blog</span>
                        </a>

                    </li>


                    <li class="mb-1 group">

                        <a href="/categories/" title="Categories"><span
                                    class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">Categories</span>
                        </a>

                    </li>


                    <li class="mb-1 group">

                        <a href="/tags/" title="Tags"><span
                                    class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">Tags</span>
                        </a>

                    </li>


                    <li class="mb-1 group">


                        <button id="search-button-1" title="Search (/)">

                          <span
                                  class="transition-colors group-dark:hover:text-primary-400 group-hover:text-primary-600"><span
                                      class="relative inline-block align-text-bottom px-1 icon"><svg aria-hidden="true"
                                                                                                     focusable="false"
                                                                                                     data-prefix="fas"
                                                                                                     data-icon="search"
                                                                                                     class="svg-inline--fa fa-search fa-w-16"
                                                                                                     role="img"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     viewBox="0 0 512 512"><path
                                              fill="currentColor"
                                              d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
</span></span><span class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2"></span>

                        </button>


                    </li>


                </ul>
            </div>
        </label>

        <ul class="flex-row hidden list-none text-end sm:flex">


            <li class="mb-1 group sm:mb-0 sm:me-7 sm:last:me-0">

                <a href="" title=""><span
                            class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">Blog</span>
                </a>

            </li>


            <li class="mb-1 group sm:mb-0 sm:me-7 sm:last:me-0">

                <a href="/categories/" title="Categories"><span
                            class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">Categories</span>
                </a>

            </li>


            <li class="mb-1 group sm:mb-0 sm:me-7 sm:last:me-0">

                <a href="/tags/" title="Tags"><span
                            class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2">Tags</span>
                </a>

            </li>


            <li class="mb-1 group sm:mb-0 sm:me-7 sm:last:me-0">


                <button id="search-button-2" title="Search (/)">

                      <span
                              class="transition-colors group-dark:hover:text-primary-400 group-hover:text-primary-600"><span
                                  class="relative inline-block align-text-bottom px-1 icon"><svg aria-hidden="true"
                                                                                                 focusable="false"
                                                                                                 data-prefix="fas"
                                                                                                 data-icon="search"
                                                                                                 class="svg-inline--fa fa-search fa-w-16"
                                                                                                 role="img"
                                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                                 viewBox="0 0 512 512"><path
                                          fill="currentColor"
                                          d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
</span></span><span class="decoration-primary-500 group-hover:underline group-hover:decoration-2 group-hover:underline-offset-2"></span>

                </button>


            </li>


        </ul>

    </nav>
</header>


<div class="relative flex flex-col grow">
    <main id="main-content" class="grow">


        <article class="
    h-full
   flex flex-col items-center justify-center text-center">
            <header class="mb-3 flex flex-col items-center">


                <h1 class="text-4xl font-extrabold">
                    Dusan Malusev
                </h1>

                <h2 class="text-xl text-neutral-500 dark:text-neutral-400">
                    I’m only human
                </h2>

                <div class="mt-1 text-2xl">

                    <div class="flex flex-wrap text-neutral-400 dark:text-neutral-500">


                        <a class="px-1 transition-transform hover:scale-125 hover:text-primary-700 dark:hover:text-primary-400"
                           style="will-change:transform;" href="mailto:hello@your_domain.com" target="_blank"
                           aria-label="Email" rel="me noopener noreferrer"><span
                                    class="relative inline-block align-text-bottom px-1 icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path
                                            fill="currentColor"
                                            d="M207.8 20.73c-93.45 18.32-168.7 93.66-187 187.1c-27.64 140.9 68.65 266.2 199.1 285.1c19.01 2.888 36.17-12.26 36.17-31.49l.0001-.6631c0-15.74-11.44-28.88-26.84-31.24c-84.35-12.98-149.2-86.13-149.2-174.2c0-102.9 88.61-185.5 193.4-175.4c91.54 8.869 158.6 91.25 158.6 183.2l0 16.16c0 22.09-17.94 40.05-40 40.05s-40.01-17.96-40.01-40.05v-120.1c0-8.847-7.161-16.02-16.01-16.02l-31.98 .0036c-7.299 0-13.2 4.992-15.12 11.68c-24.85-12.15-54.24-16.38-86.06-5.106c-38.75 13.73-68.12 48.91-73.72 89.64c-9.483 69.01 43.81 128 110.9 128c26.44 0 50.43-9.544 69.59-24.88c24 31.3 65.23 48.69 109.4 37.49C465.2 369.3 496 324.1 495.1 277.2V256.3C495.1 107.1 361.2-9.332 207.8 20.73zM239.1 304.3c-26.47 0-48-21.56-48-48.05s21.53-48.05 48-48.05s48 21.56 48 48.05S266.5 304.3 239.1 304.3z"></path></svg>
</span></a>


                        <a class="px-1 transition-transform hover:scale-125 hover:text-primary-700 dark:hover:text-primary-400"
                           style="will-change:transform;" href="https://dev.to/username" target="_blank"
                           aria-label="Dev" rel="me noopener noreferrer"><span
                                    class="relative inline-block align-text-bottom px-1 icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path
                                            fill="currentColor"
                                            d="M120.12 208.29c-3.88-2.9-7.77-4.35-11.65-4.35H91.03v104.47h17.45c3.88 0 7.77-1.45 11.65-4.35 3.88-2.9 5.82-7.25 5.82-13.06v-69.65c-.01-5.8-1.96-10.16-5.83-13.06zM404.1 32H43.9C19.7 32 .06 51.59 0 75.8v360.4C.06 460.41 19.7 480 43.9 480h360.2c24.21 0 43.84-19.59 43.9-43.8V75.8c-.06-24.21-19.7-43.8-43.9-43.8zM154.2 291.19c0 18.81-11.61 47.31-48.36 47.25h-46.4V172.98h47.38c35.44 0 47.36 28.46 47.37 47.28l.01 70.93zm100.68-88.66H201.6v38.42h32.57v29.57H201.6v38.41h53.29v29.57h-62.18c-11.16.29-20.44-8.53-20.72-19.69V193.7c-.27-11.15 8.56-20.41 19.71-20.69h63.19l-.01 29.52zm103.64 115.29c-13.2 30.75-36.85 24.63-47.44 0l-38.53-144.8h32.57l29.71 113.72 29.57-113.72h32.58l-38.46 144.8z"></path></svg>
</span></a>


                        <a class="px-1 transition-transform hover:scale-125 hover:text-primary-700 dark:hover:text-primary-400"
                           style="will-change:transform;" href="https://discord.gg/invitecode" target="_blank"
                           aria-label="Discord" rel="me noopener noreferrer"><span
                                    class="relative inline-block align-text-bottom px-1 icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path
                                            fill="currentColor"
                                            d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"></path></svg>
</span></a>


                        <a class="px-1 transition-transform hover:scale-125 hover:text-primary-700 dark:hover:text-primary-400"
                           style="will-change:transform;" href="https://github.com/username" target="_blank"
                           aria-label="Github" rel="me noopener noreferrer"><span
                                    class="relative inline-block align-text-bottom px-1 icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path
                                            fill="currentColor"
                                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
</span></a>


                        <a class="px-1 transition-transform hover:scale-125 hover:text-primary-700 dark:hover:text-primary-400"
                           style="will-change:transform;" href="https://linkedin.com/in/username" target="_blank"
                           aria-label="Linkedin" rel="me noopener noreferrer"><span
                                    class="relative inline-block align-text-bottom px-1 icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path
                                            fill="currentColor"
                                            d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
</span></a>


                        <a class="px-1 transition-transform hover:scale-125 hover:text-primary-700 dark:hover:text-primary-400"
                           style="will-change:transform;" href="https://reddit.com/user/username" target="_blank"
                           aria-label="Reddit" rel="me noopener noreferrer"><span
                                    class="relative inline-block align-text-bottom px-1 icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path
                                            fill="currentColor"
                                            d="M201.5 305.5c-13.8 0-24.9-11.1-24.9-24.6 0-13.8 11.1-24.9 24.9-24.9 13.6 0 24.6 11.1 24.6 24.9 0 13.6-11.1 24.6-24.6 24.6zM504 256c0 137-111 248-248 248S8 393 8 256 119 8 256 8s248 111 248 248zm-132.3-41.2c-9.4 0-17.7 3.9-23.8 10-22.4-15.5-52.6-25.5-86.1-26.6l17.4-78.3 55.4 12.5c0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.3 24.9-24.9s-11.1-24.9-24.9-24.9c-9.7 0-18 5.8-22.1 13.8l-61.2-13.6c-3-.8-6.1 1.4-6.9 4.4l-19.1 86.4c-33.2 1.4-63.1 11.3-85.5 26.8-6.1-6.4-14.7-10.2-24.1-10.2-34.9 0-46.3 46.9-14.4 62.8-1.1 5-1.7 10.2-1.7 15.5 0 52.6 59.2 95.2 132 95.2 73.1 0 132.3-42.6 132.3-95.2 0-5.3-.6-10.8-1.9-15.8 31.3-16 19.8-62.5-14.9-62.5zM302.8 331c-18.2 18.2-76.1 17.9-93.6 0-2.2-2.2-6.1-2.2-8.3 0-2.5 2.5-2.5 6.4 0 8.6 22.8 22.8 87.3 22.8 110.2 0 2.5-2.2 2.5-6.1 0-8.6-2.2-2.2-6.1-2.2-8.3 0zm7.7-75c-13.6 0-24.6 11.1-24.6 24.9 0 13.6 11.1 24.6 24.6 24.6 13.8 0 24.9-11.1 24.9-24.6 0-13.8-11-24.9-24.9-24.9z"></path></svg>
</span></a>


                        <a class="px-1 transition-transform hover:scale-125 hover:text-primary-700 dark:hover:text-primary-400"
                           style="will-change:transform;" href="https://stackoverflow.com/users/userid/username"
                           target="_blank" aria-label="Stack-Overflow" rel="me noopener noreferrer"><span
                                    class="relative inline-block align-text-bottom px-1 icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path
                                            fill="currentColor"
                                            d="M290.7 311L95 269.7 86.8 309l195.7 41zm51-87L188.2 95.7l-25.5 30.8 153.5 128.3zm-31.2 39.7L129.2 179l-16.7 36.5L293.7 300zM262 32l-32 24 119.3 160.3 32-24zm20.5 328h-200v39.7h200zm39.7 80H42.7V320h-40v160h359.5V320h-40z"></path></svg>
</span></a>


                        <a class="px-1 transition-transform hover:scale-125 hover:text-primary-700 dark:hover:text-primary-400"
                           style="will-change:transform;" href="https://steamcommunity.com/profiles/userid"
                           target="_blank" aria-label="Steam" rel="me noopener noreferrer"><span
                                    class="relative inline-block align-text-bottom px-1 icon"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path
                                            fill="currentColor"
                                            d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.79 52.79 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3.1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z"></path></svg>
</span></a>


                    </div>


                </div>
            </header>
            <section class="prose dark:prose-invert"></section>
        </article>
        <section>


        </section>


    </main>
    <footer class="py-10 print:hidden">


        <div class="flex items-center justify-between">
            <div>


                <p class="text-sm text-neutral-500 dark:text-neutral-400">
                    Copy, <em>right?</em> 🤔
                </p>


                <p class="text-xs text-neutral-500 dark:text-neutral-400">


                    Powered by <a class="hover:underline hover:decoration-primary-400 hover:text-primary-500"
                                  href="https://gohugo.io/" target="_blank" rel="noopener noreferrer">Hugo</a> &amp; <a
                            class="hover:underline hover:decoration-primary-400 hover:text-primary-500"
                            href="https://github.com/jpanther/congo" target="_blank" rel="noopener noreferrer">Congo</a>
                </p>

            </div>
            <div class="flex flex-row items-center">


                <div
                        class=" cursor-pointer text-sm text-neutral-700 hover:text-primary-600 dark:text-neutral dark:hover:text-primary-400">
                    <button id="appearance-switcher-0" type="button" aria-label="appearance switcher">
                        <div class="flex items-center justify-center w-12 h-12 dark:hidden"
                             title="Switch to dark appearance">
              <span class="relative inline-block align-text-bottom px-1 icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   viewBox="0 0 512 512"><path
                              fill="currentColor"
                              d="M32 256c0-123.8 100.3-224 223.8-224c11.36 0 29.7 1.668 40.9 3.746c9.616 1.777 11.75 14.63 3.279 19.44C245 86.5 211.2 144.6 211.2 207.8c0 109.7 99.71 193 208.3 172.3c9.561-1.805 16.28 9.324 10.11 16.95C387.9 448.6 324.8 480 255.8 480C132.1 480 32 379.6 32 256z"></path></svg>
</span>
                        </div>
                        <div class="items-center justify-center hidden w-12 h-12 dark:flex"
                             title="Switch to light appearance">
              <span class="relative inline-block align-text-bottom px-1 icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                                                   viewBox="0 0 512 512"><path
                              fill="currentColor"
                              d="M256 159.1c-53.02 0-95.1 42.98-95.1 95.1S202.1 351.1 256 351.1s95.1-42.98 95.1-95.1S309 159.1 256 159.1zM509.3 347L446.1 255.1l63.15-91.01c6.332-9.125 1.104-21.74-9.826-23.72l-109-19.7l-19.7-109c-1.975-10.93-14.59-16.16-23.72-9.824L256 65.89L164.1 2.736c-9.125-6.332-21.74-1.107-23.72 9.824L121.6 121.6L12.56 141.3C1.633 143.2-3.596 155.9 2.736 164.1L65.89 256l-63.15 91.01c-6.332 9.125-1.105 21.74 9.824 23.72l109 19.7l19.7 109c1.975 10.93 14.59 16.16 23.72 9.824L256 446.1l91.01 63.15c9.127 6.334 21.75 1.107 23.72-9.822l19.7-109l109-19.7C510.4 368.8 515.6 356.1 509.3 347zM256 383.1c-70.69 0-127.1-57.31-127.1-127.1c0-70.69 57.31-127.1 127.1-127.1s127.1 57.3 127.1 127.1C383.1 326.7 326.7 383.1 256 383.1z"></path></svg>
</span>
                        </div>
                    </button>
                </div>

            </div>
        </div>


    </footer>
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

</div>


{{ $slot }}

@livewireScripts
@livewire('notifications')
@filamentScripts
@vite('resources/js/pusher.js')
</body>
</html>
