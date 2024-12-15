<nav class=" relative z-40 w-full">
    <div class="flex flex-wrap justify-between items-center mx-auto py-3 px-5">
        <div class="flex">
            <a href="/" class="me-5 flex items-center space-x-3 rtl:space-x-reverse">
                <div class="flex items-center">
                    <x-srms-logo class="w-8 mr-2" />
                    <p class="font-bold text-sm uppercase">
                        Slope Risk<br> Management System
                    </p>
                </div>
            </a>
            <a href="/" class="me-5 flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/components/jsb.png" class="h-10 hover:grayscale-0 hover:opacity-100 grayscale opacity-35"
                    alt="">
            </a>
            <a href="/" class="me-5 flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/components/jmtm.webp" class="h-10 hover:grayscale-0 hover:opacity-100 grayscale opacity-35"
                    alt="">
            </a>
        </div>

        <button data-collapse-toggle="mega-menu-full" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="mega-menu-full" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div id="mega-menu-full"
            class="items-center justify-between font-medium hidden w-full md:flex md:w-auto md:order-1">
            <ul
                class="flex items-center flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">

                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-lime-700 md:p-0  ">What's
                        New</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-lime-700 md:p-0  ">About
                        Us</a>
                </li>

                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-lime-600 md:p-0 md:w-auto dark:text-white md:dark:hover:text-lime-600 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Document
                        Publish
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a download href="/components/documents/LHRAForm.xlsm"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LSRA
                                    Form</a>
                            </li>
                            <li>
                                <a download href="/components/documents/SMARTForm.xlsx"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">SMART
                                    Form</a>
                            </li>
                            <li aria-labelledby="dropdownNavbarLink">
                                <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                    data-dropdown-placement="right-start" type="button"
                                    class="flex items-center justify-between w-full px-4 text-left py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Standard
                                    & Reference<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <div id="doubleDropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="doubleDropdownButton">
                                        <li>
                                            <a download
                                                href="/components/documents/Gambar Standar Pekerjaan Jalan dan Jembatan.PDF"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Standard
                                                Jalan & Jembatan</a>
                                        </li>
                                        <li>
                                            <a download href="/components/documents/GEO Publish No 1 2009.pdf"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">GEO
                                                Publication No. 1 (2009)</a>
                                        </li>
                                        <li>
                                            <a download href="/components/documents/GEO Publish No 1 2011.pdf"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Publication
                                                No. 1 (2011)</a>
                                        </li>
                                        <li>
                                            <a download
                                                href="/components/documents/GEO REPORT NO. 138 (Terrain Hazard).pdf"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">GEO
                                                Report No. 138</a>
                                        </li>
                                        <li>
                                            <a download href="/components/documents/GEO REPORT NO. 195.pdf"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">GEO
                                                Report No. 195</a>
                                        </li>
                                        <li>
                                            <a download href="/components/documents/GEO REPORT NO. 284.pdf"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">GEO
                                                Report No. 284</a>
                                        </li>
                                        <li>
                                            <a download
                                                href="/components/documents/Geoguide 5 – Guide to Slope Maintenance 2023.pdf"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Guide
                                                to Slope Maintenance 2023</a>
                                        </li>
                                        <li>
                                            <a download
                                                href="/components/documents/spesifikasi-umum-untuk-jalan-bebas-hambatan-dan-jalan-tol.pdf"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Spesifikasi
                                                Jalan Tol</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                @auth
                @if (Auth::user()->role === 'manager')
                <li>
                    <a href="/accounts"
                        class="block py-2 px-3 border border-lime-600 rounded-full text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-lime-700 ">Account
                        Management
                    </a>
                </li>
                @endif
                @endauth
            </ul>
        </div>
    </div>

</nav>