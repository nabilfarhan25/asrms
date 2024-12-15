<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Slope Risk Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    {{-- Navbar --}}
    <div class=" sm:p-5 p-3">
        <nav class="border border-gray-200 bg-gray-100 rounded-xl relative z-40 ">
            <div class="flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <div class="flex items-center">
                        <x-srms-logo class="w-8 mr-2" />
                        <p class="font-bold text-sm uppercase">
                            Slope Risk<br> Management System
                        </p>
                    </div>
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                    <ul
                        class="flex flex-col font-medium mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">

                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-lime-600 md:p-0 dark:text-white md:dark:hover:text-lime-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">What's
                                New</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-lime-600 md:p-0 dark:text-white md:dark:hover:text-lime-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About
                                Us</a>
                        </li>

                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-lime-600 md:p-0 md:w-auto dark:text-white md:dark:hover:text-lime-600 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Document
                                Publish
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                        out</a>
                                </div>
                            </div>
                        </li>
                        @auth


                        @endauth

                        @if (Route::has('login'))
                        <div>
                            @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a {{ __('Log Out') }} </a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                        class="underline block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-lime-600 md:p-0 dark:text-white md:dark:hover:text-lime-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log
                                        Out</a>
                            </form>
                            @else
                            <li>
                                <a href="/login"
                                    class="underline block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-lime-600 md:p-0 dark:text-white md:dark:hover:text-lime-600 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                            </li>
                            @endauth
                        </div>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    {{-- Jumbotron --}}
    <div class="sm:px-5 px-3 h-96">
        <div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-full overflow-hidden rounded-3xl ">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
                    <div style="background-image: url('/components/bg.webp')"
                        class="flex justify-center items-center m-auto text-white bg-center bg-cover h-full bg-gray-200">

                        <div>
                            <h2 class="text-center uppercase font-semibold text-lg">Welcome</h2>
                            <div class="flex items-center animate-jump animate-once animate-ease-in-out">
                                <x-srms-logo class="mr-3 sm:w-14 w-10"></x-srms-logo>
                                <h1 class="text-white font-bold text-xl sm:text-3xl">
                                    Slope Risk Management System<span class="text-lime-500">.</span>
                                </h1>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
                    <div style="background-image: url('/components/bg2.webp')"
                        class="p-10 flex justify-start items-start m-auto text-white bg-center bg-cover h-full bg-gray-200">

                        <div class="flex items-center">
                            <x-srms-logo class="w-10 mr-2" />
                            <p class="font-bold uppercase">
                                Slope Risk<br> Management System
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out h-full" data-carousel-item>
                    <div style="background-image: url('/components/bg3.webp')"
                        class="flex justify-center items-center m-auto text-white bg-center bg-cover h-full bg-gray-200">

                        <div class="text-center flex items-center animate-fade-up">
                            <figure class="max-w-screen-md mx-auto text-center">
                                <svg class="w-10 h-10 mx-auto mb-3 text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                    <path
                                        d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                                </svg>
                                <blockquote>
                                    <p class=" sm:text-2xl italic font-mediumtext-white">Inventory - Risk Assessment -
                                        Mitigation - Sustainable</p>
                                </blockquote>
                            </figure>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    {{-- Menu --}}
    <div class="flex flex-wrap justify-center p-5">
        <a class="m-1" href="/inventory">
            <div
                class="max-w-60 border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600 h-full">
                <div class="flex justify-center mb-3">

                    <img src="/components/icons/inventory-ico.svg"
                        class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out" alt="">
                </div>
                <div class="text-center">
                    <h2 class="font-bold sm:text-lg mb-1">
                        SLOPE INVENTORY
                    </h2>
                    <p class="text-xs">Complete database of all managed slopes with essential data for
                        monitoring.
                    </p>
                </div>
            </div>
        </a>

        <a class="m-1" href="/management">
            <div
                class="max-w-60 border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600 h-full">
                <div class="flex justify-center mb-3">
                    <img src="/components/icons/management-ico.svg"
                        class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out" alt="">
                </div>
                <div class="text-center">
                    <h2 class="font-bold sm:text-lg mb-1">
                        SLOPE PRIORITY
                    </h2>
                    <p class="text-xs">Helps prioritize slope handling based on risk and urgency for
                        effective resource use.
                    </p>
                </div>
            </div>
        </a>

        <a class="m-1" href="inspection">
            <div
                class="max-w-60 border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600 h-full">
                <div class="flex justify-center mb-3">
                    <img src="/components/icons/inspection-ico.svg"
                        class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out" alt="">
                </div>
                <div class="text-center">
                    <h2 class="font-bold sm:text-lg mb-1">
                        INSPECTION
                    </h2>
                    <p class="text-xs"> Integrated inspection tracking and real-time reporting for early
                        issue detection and resolution.
                    </p>
                </div>
            </div>
        </a>

        <a class="m-1" href="preservation">
            <div
                class="max-w-60 border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600 h-full">
                <div class="flex justify-center mb-3">
                    <img src="/components/icons/preservation-ico.svg"
                        class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out" alt="">
                </div>
                <div class="text-center">
                    <h2 class="font-bold sm:text-lg mb-1">
                        SLOPE PRESERVATION
                    </h2>
                    <p class="text-xs"> Integrated inspection tracking and real-time reporting for early
                        issue detection and resolution.
                    </p>
                </div>
            </div>
        </a>

        <a class="m-1" href="mitigation">
            <div
                class="max-w-60 border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600 h-full">
                <div class="flex justify-center mb-3">
                    <img src="/components/icons/mitigation-ico.svg"
                        class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out" alt="">
                </div>
                <div class="text-center">
                    <h2 class="font-bold sm:text-lg mb-1">
                        MITIGATION CALCULATE
                    </h2>
                    <p class="text-xs">Provides tailored mitigation solutions based on data analysis to
                        reduce landslide risks.

                    </p>
                </div>
            </div>
        </a>

        <a class="m-1" href="/map" target="_blank">
            <div
                class="max-w-60 border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600 h-full">
                <div class="flex justify-center mb-3">
                    <img src="/components/icons/info-ico.svg"
                        class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out" alt="">
                </div>
                <div class="text-center">
                    <h2 class="font-bold sm:text-lg mb-1">
                        SLOPE INFORMATION
                    </h2>
                    <p class="text-xs">Visualizing slope locations, inspection statuses,
                        and mitigation actions for quick decision-making.
                    </p>
                </div>
            </div>
        </a>
    </div>



</body>

</html>