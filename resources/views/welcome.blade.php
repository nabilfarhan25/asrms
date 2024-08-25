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

<body class="font-sans antialiased bg-stone-100">

    <div class="sm:h-screen h-full ">
        <div class="h-1/2">
            <x-header />
            <div class="p-5">
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative sm:h-full h-56 overflow-hidden rounded-3xl md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div style="background-image: url('/components/bg.webp')"
                                class="flex justify-center items-center m-auto text-white bg-center bg-cover h-96 bg-gray-200">

                                <div>
                                    <h2 class="text-center uppercase font-semibold text-lg">Welcome</h2>
                                    <div
                                        class="text-center flex items-center animate-jump animate-once animate-ease-in-out">
                                        <x-srms-logo class="mr-3 w-14"></x-srms-logo>
                                        <h1 class="text-white font-bold text-3xl">
                                            Slope Risk Management System<span class="text-lime-500">.</span>
                                        </h1>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div style="background-image: url('/components/bg2.webp')"
                                class="p-10 flex justify-start items-start m-auto text-white bg-center bg-cover h-96 bg-gray-200">

                                <div class="flex items-center">
                                    <x-srms-logo class="w-10 mr-2" />
                                    <p class="font-bold uppercase">
                                        Slope Risk<br> Management System
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div style="background-image: url('/components/bg3.webp')"
                                class="flex justify-center items-center m-auto text-white bg-center bg-cover h-96 bg-gray-200">

                                <div class="text-center flex items-center animate-fade-up">
                                    <figure class="max-w-screen-md mx-auto text-center">
                                        <svg class="w-10 h-10 mx-auto mb-3 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                            <path
                                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                                        </svg>
                                        <blockquote>
                                            <p class="text-2xl italic font-mediumtext-white">"Engineering is the
                                                professional art of applying science to the optimum conversion of
                                                natural
                                                resources to the benefit of man."</p>
                                        </blockquote>
                                        <figcaption
                                            class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                                            <div
                                                class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                                <cite class="pe-3 font-medium text-white">– Ralph J. Smith</cite>
                                            </div>
                                        </figcaption>
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 1 1 5l4 4" />
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
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="h-1/2 flex items-center justify-center">
            <div>
                <div class="p-5 max-w-screen-2xl mx-auto grid sm:grid-cols-3 md:grid-cols-6 grid-cols-2 gap-3">
                    <a class="" href="/inventory">
                        <div
                            class="h-full w-full border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600">

                            <div class="flex justify-center mb-3">

                                <img src="/icons/inventory-ico.svg"
                                    class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out"
                                    alt="">
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

                    <a class="" href="/management">
                        <div
                            class="h-full w-full border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600">

                            <div class="flex justify-center mb-3">
                                <img src="/icons/management-ico.svg"
                                    class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out"
                                    alt="">
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

                    <a class="" href="inspection">
                        <div
                            class="h-full w-full border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600">

                            <div class="flex justify-center mb-3">
                                <img src="/icons/inspection-ico.svg"
                                    class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out"
                                    alt="">
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

                    <a class="" href="preservation">
                        <div
                            class="h-full w-full border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600">

                            <div class="flex justify-center mb-3">
                                <img src="/icons/inspection-ico.svg"
                                    class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out"
                                    alt="">
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

                    <a class="" href="mitigation">
                        <div
                            class="h-full w-full border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600">

                            <div class="flex justify-center mb-3">
                                <img src="/icons/mitigation-ico.svg"
                                    class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out"
                                    alt="">
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

                    <a class="" href="/slopes">
                        <div
                            class="h-full w-full border-2 border-gray-300 px-5 py-10 rounded-3xl group transition ease-in-out duration-150 hover:shadow hover:text-lime-600 hover:border-lime-600">

                            <div class="flex justify-center mb-3">
                                <img src="/icons/info-ico.svg"
                                    class="sm:h-20 h-16 group-hover:animate-jump animate-once animate-ease-in-out"
                                    alt="">
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
            </div>
        </div>

    </div>

</body>

</html>