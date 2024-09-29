<x-app-layout>
    {{--
    <x-header /> --}}
    <div class="p-5">
        <x-header />
        <div class="flex justify-between py-2 px-3 sm:px-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <!-- Breadcrumb -->
            @php
            $bread = [
            ['url' => '/inspection', 'label' => 'Inspections'],
            ['url' => '/inspection/'.$slope->slug, 'label' => $slope->slope_name],
            ['url' => '/maintenance-routine/'.$slope->slug, 'label' => 'Routine Maintenance','active' => true],

            ];
            @endphp
            <x-bread :items="$bread" />

            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                class="inline-flex items-center p-2 text-sm font-medium text-center bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <div class="mr-3 font-medium text-base text-gray-800">Welcome, {{ Auth::user()->name }}</div>
                <svg class="w-5 h-5 text-lime-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownDots"
                class=" z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                    <li>
                        <a href="/profile"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a {{ __('Log Out') }} </a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log
                                    Out</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4">

            <div>
                <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
                    <div>
                        <h2 class="text-gray-700 text-5xl font-bold">
                            {{$slope->slope_name}}
                        </h2>
                        <p class="text-gray-500">
                            Location : {{$slope->location}}
                        </p>
                    </div>

                    <x-line />
                    <div class="mb-5">
                        <h4 class="text-lg text-gray-700 font-semibold mb-3">
                            Engineering Inspection
                        </h4>
                        <ol class="flex items-center mb-2">
                            <li class="relative w-full">
                                <div class="flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                    </div>
                                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                </div>

                            </li>
                            <li class="relative w-full">
                                <div class="flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                    </div>

                                </div>

                            </li>
                        </ol>

                        <div class="bg-gray-200 p-3 rounded-xl flex w-full">
                            <div class="w-full">
                                Latest Inspection :
                                <h2 class="font-bold text-lg">
                                    {{date('d M Y', strtotime($slope->updated_at))}}
                                </h2>
                            </div>
                            <div class="w-full">
                                Next Inspection :
                                <h2 class="font-bold text-lg">
                                    {{date('d M Y', strtotime($slope->engineer_inspection))}}
                                </h2>
                            </div>

                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg text-gray-700 font-semibold mb-3">
                            Routine Inspection
                        </h4>

                        <ol class="flex items-center mb-2">
                            <li class="relative w-full">
                                <div class="flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                    </div>
                                    <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                </div>

                            </li>
                            <li class="relative w-full">
                                <div class="flex items-center">
                                    <div
                                        class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                        <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                    </div>

                                </div>

                            </li>
                        </ol>
                        <div class="bg-gray-200 p-3 rounded-xl flex w-full">
                            @if($maintenance !== null)
                            <div class="w-full">
                                Latest inspection :
                                <h2 class="font-bold text-lg">
                                    {{date('d M Y', strtotime($maintenance->created_at))}}
                                </h2>
                            </div>
                            <div class="w-full">
                                Next Inspection :
                                <h2 class="font-bold text-lg">
                                    {{date('d M Y', strtotime($slope->maintenance_inspection))}}
                                </h2>
                            </div>
                            @else
                            Routine maintenance has never been carried out
                            @endisset
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-2 p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">


                <div class="mb-5">
                    <a href="/inspection/{{$slope->slug}}"
                        class="inline-flex items-center justify-center px-4 py-2 border border-lime-600 rounded-full text-lime-600 hover:bg-lime-600 hover:text-white transition duration-150">
                        <svg class="w-5 h-5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m15 19-7-7 7-7" />
                        </svg>
                        Back
                    </a>
                </div>

                <h2 class="text-xl font-bold mb-6">
                    Maintenance Routine
                </h2>

                <div class="mb-10">
                    <ol class="sm:flex">
                        <li class="relative mb-6 sm:mb-0 w-1/3">
                            <div class="flex items-center">
                                <div
                                    class="z-10 flex items-center justify-center w-6 h-6 bg-lime-100 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-lime-600 dark:text-lime-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Download Template Form
                                </h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400 mb-3">Get started with
                                    downloading the maintenance form template provided.</p>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-lime-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                                        class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                        <path
                                            d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                    </svg> Download Template</a>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0 w-1/3">
                            <div class="flex items-center">
                                <div
                                    class="z-10 flex items-center justify-center w-6 h-6 bg-lime-100 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-lime-600 dark:text-lime-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Fill the Maintenance
                                    Form
                                </h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Complete the data on
                                    the form according to ongoing maintenance activities.</p>
                            </div>
                        </li>
                        <li class="relative mb-6 sm:mb-0 w-1/3">
                            <div class="flex items-center">
                                <div
                                    class="z-10 flex items-center justify-center w-6 h-6 bg-lime-100 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                    <svg class="w-2.5 h-2.5 text-lime-600 dark:text-lime-300" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <div class="hidden sm:flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                            </div>
                            <div class="mt-3 sm:pe-8">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Upload Maintenance Form
                                </h3>
                                <p class="text-base font-normal text-gray-500 dark:text-gray-400">Upload the results of
                                    the data collection that has been carried out in the maintenance form on the
                                    maintenance page which can be accessed below.</p>
                            </div>
                        </li>
                    </ol>
                </div>
                <x-line />

                <div>

                    <div class="mb-4">
                        <ul class="flex flex-wrap text-sm font-medium text-center" id="default-styled-tab"
                            data-tabs-toggle="#default-styled-tab-content"
                            data-tabs-active-classes="text-lime-600 hover:text-lime-600 bg-white border border-gray-100"
                            data-tabs-inactive-classes="bg-gray-200 dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            role="tablist">
                            <li class="rounded-l-full bg-gray-200" role="presentation">
                                <button class="inline-block font-bold py-3 px-4 rounded-full" id="profile-styled-tab"
                                    data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Maintenance Routine</button>
                            </li>
                            <li class="rounded-r-full bg-gray-200" role="presentation">
                                <button
                                    class="inline-block font-bold py-3 px-4 rounded-full hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button"
                                    role="tab" aria-controls="dashboard" aria-selected="false">History</button>
                            </li>

                        </ul>
                    </div>
                    <div id="default-styled-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-100 dark:bg-gray-800" id="styled-profile"
                            role="tabpanel" aria-labelledby="profile-tab">

                            <div>
                                <h3 class="font-bold mb-2">
                                    Maintenance Routine
                                </h3>

                                <div class="mb-4">
                                    @if ($slope->slope_type == 'cut-type' || $slope->slope_type == 'fill-type')
                                    <div class="relative overflow-x-auto rounded-xl border border-gray-300">
                                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-gray-700 uppercase bg-gray-50 border-b border-gray-300 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3">Type of Inspection</th>
                                                    <th scope="col" class="px-6 py-3">Item Maintenance</th>
                                                    <th scope="col" class="px-6 py-3">Typical Maintenance Works Required
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                        rowspan="4">Surface Inspection</td>
                                                    <td class="px-6 py-2" rowspan="4">Vegetated Surface Cover</td>
                                                    <td class="px-6 py-2">
                                                        <ul class="list-disc pl-5">
                                                            <li>Trim vegetation if overgrown.</li>
                                                            <li>Replant vegetation in areas where the vegetated
                                                                surfacing
                                                                has died.
                                                            </li>
                                                            <li>Remove dead, decaying or unstable trees.</li>
                                                            <li>Regrade eroded areas with compacted soil followed by
                                                                re-planting.
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                        rowspan="2">Drainage Inspection</td>
                                                    <td class="px-6 py-2">Surface Drainage Channels</td>
                                                    <td class="px-6 py-2">
                                                        <ul class="list-disc pl-5">
                                                            <li>Clear debris, undesirable vegetation and other
                                                                obstructions.
                                                            </li>
                                                            <li>Repair minor cracks and rebuild severely cracked
                                                                channels on
                                                                drainage.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-2">Weepholes and Drainage Pipes</td>
                                                    <td class="px-6 py-2">
                                                        <ul class="list-disc pl-5">
                                                            <li>Clear obstructions (e.g., weeds and debris) in weepholes
                                                                and
                                                                pipe
                                                                ends.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                        rowspan="3">Instability Inspection</td>
                                                    <td class="px-6 py-2">Seepage</td>
                                                    <td class="px-6 py-2">
                                                        <ul class="list-disc pl-5">
                                                            <li>Identification of seepage.</li>
                                                            <li>Drain the seepage with vertical and horizontal drains.
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-2">Cracking and Deformation</td>
                                                    <td class="px-6 py-2">
                                                        <ul class="list-disc pl-5">
                                                            <li>Record and monitor cracks on slopes and slope
                                                                reinforcement
                                                                surfaces.</li>
                                                            <li>Record and monitor signs of deformation on the slope.
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <td class="px-6 py-2">Rainfall</td>
                                                    <td class="px-6 py-2">
                                                        <ul class="list-disc pl-5">
                                                            <li>Record the rainfall.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                    @if ($slope->slope_type == 'rock-type')
                                    <div class="relative overflow-x-auto rounded-xl border border-gray-300">
                                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3">Type of Inspection</th>
                                                    <th scope="col" class="px-6 py-3">Item Maintenance</th>
                                                    <th scope="col" class="px-6 py-3">Typical Maintenance Works Required
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                        rowspan="4">Surface Inspection</td>
                                                    <td class="px-6 py-4" rowspan="4">Vegetated Surface Cover</td>
                                                    <td class="px-6 py-4">
                                                        <ul class="list-disc pl-5">
                                                            <li>Trim vegetation if overgrown.</li>
                                                            <li>Replant vegetation in areas where the vegetated
                                                                surfacing
                                                                has died.
                                                            </li>
                                                            <li>Remove dead, decaying or unstable trees.</li>
                                                            <li>Regrade eroded areas with compacted soil followed by
                                                                re-planting.
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                        rowspan="2">Drainage Inspection</td>
                                                    <td class="px-6 py-4">Surface Drainage Channels</td>
                                                    <td class="px-6 py-4">
                                                        <ul class="list-disc pl-5">
                                                            <li>Clear debris, undesirable vegetation and other
                                                                obstructions.
                                                            </li>
                                                            <li>Repair minor cracks and rebuild severely cracked
                                                                channels on
                                                                drainage.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">Weepholes and Drainage Pipes</td>
                                                    <td class="px-6 py-4">
                                                        <ul class="list-disc pl-5">
                                                            <li>Clear obstructions (e.g., weeds and debris) in weepholes
                                                                and
                                                                pipe
                                                                ends.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                                        rowspan="3">Instability Inspection</td>
                                                    <td class="px-6 py-4">Seepage</td>
                                                    <td class="px-6 py-4">
                                                        <ul class="list-disc pl-5">
                                                            <li>Identification of seepage.</li>
                                                            <li>Drain the seepage with vertical and horizontal drains.
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">Cracking and Deformation</td>
                                                    <td class="px-6 py-4">
                                                        <ul class="list-disc pl-5">
                                                            <li>Record and monitor cracks on slopes and slope
                                                                reinforcement
                                                                surfaces.</li>
                                                            <li>Record and monitor signs of deformation on the slope.
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-6 py-4">Rainfall</td>
                                                    <td class="px-6 py-4">
                                                        <ul class="list-disc pl-5">
                                                            <li>Record the rainfall.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <td
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Geological Inspection</td>
                                                    <td class="px-6 py-4">Rock Slope and Boulders</td>
                                                    <td class="px-6 py-4">
                                                        <ul class="list-disc pl-5">
                                                            <li>Removal of loose rock debris and undesirable vegetation
                                                                from
                                                                rock
                                                                slopes or around boulders.</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                    @if ($slope->slope_type == 'retaining-type')
                                    <div class="relative overflow-x-auto rounded-xl border border-gray-300">
                                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3">Type of Inspection</th>
                                                    <th scope="col" class="px-6 py-3">Item Maintenance</th>
                                                    <th scope="col" class="px-6 py-3">Typical Maintenance Works Required
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Surface Inspection</td>
                                                    <td class="px-6 py-4">Impermeable Surface Cover</td>
                                                    <td class="px-6 py-4">
                                                        - Remove undesirable vegetation growth.<br>
                                                        - Remove dead, decaying or unstable trees.<br>
                                                        - Repair cracks or spalling.<br>
                                                        - Regrade and repair eroded areas.<br>
                                                        - Replace surface cover that has separated from underlying soil.
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Drainage Inspection</td>
                                                    <td class="px-6 py-4">Surface Drainage Channels</td>
                                                    <td class="px-6 py-4">
                                                        - Clear debris, undesirable vegetation and other
                                                        obstructions<br>
                                                        - Repair minor cracks and Rebuild severely cracked channels on
                                                        drainage
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    </td>
                                                    <td class="px-6 py-4">Weepholes and Drainage Pipes</td>
                                                    <td class="px-6 py-4">
                                                        - Clear obstructions (e.g. weeds and debris) in weepholes and
                                                        pipe
                                                        ends.
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Instability Inspection</td>
                                                    <td class="px-6 py-4">Seepage</td>
                                                    <td class="px-6 py-4">
                                                        - Identification of seepage<br>
                                                        - Drain the seepage with vertical and horizontal drains
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    </td>
                                                    <td class="px-6 py-4">Cracking and Deformation</td>
                                                    <td class="px-6 py-4">
                                                        - Record and monitor cracks on slopes and slope reinforcement
                                                        surfaces<br>
                                                        - Record and monitor signs of deformation on the slope
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    </td>
                                                    <td class="px-6 py-4">Rainfall</td>
                                                    <td class="px-6 py-4">
                                                        - Record the rainfall
                                                    </td>
                                                </tr>
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <td
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Geological Inspection</td>
                                                    <td class="px-6 py-4">Rock Slope and Boulders</td>
                                                    <td class="px-6 py-4">
                                                        - Removal of loose rock debris and undesirable vegetation from
                                                        rock
                                                        slopes
                                                        or around boulders.
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    @endif
                                    {{-- TABLE COMBINATION --}}
                                    @if ($slope->slope_type == 'combine-type')
                                    <table class="w-full text-sm text-left text-gray-500">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">Type of Inspection</th>
                                                <th scope="col" class="px-6 py-3">Item Maintenance</th>
                                                <th scope="col" class="px-6 py-3">Typical Maintenance Works Required
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-white border-b">
                                                <td rowspan="2" class="px-6 py-4 font-medium text-gray-900">Surface
                                                    Inspection</td>
                                                <td class="px-6 py-4">Vegetated Surface Cover</td>
                                                <td class="px-6 py-4">
                                                    - Trim vegetation if overgrown.<br>
                                                    - Replant vegetation in areas where the vegetated surfacing has
                                                    died.<br>
                                                    - Remove dead, decaying or unstable trees.<br>
                                                    - Regrade eroded areas with compacted soil followed by re-planting.
                                                </td>
                                            </tr>
                                            <tr class="bg-white border-b">
                                                <td class="px-6 py-4">Impermeable Surface Cover</td>
                                                <td class="px-6 py-4">
                                                    - Remove undesirable vegetation growth.<br>
                                                    - Remove dead, decaying or unstable trees.<br>
                                                    - Repair cracks or spalling.<br>
                                                    - Regrade and repair eroded areas.<br>
                                                    - Replace surface cover that has separated from underlying soil.
                                                </td>
                                            </tr>
                                            <tr class="bg-white border-b">
                                                <td rowspan="2" class="px-6 py-4 font-medium text-gray-900">Drainage
                                                    Inspection</td>
                                                <td class="px-6 py-4">Surface Drainage Channels</td>
                                                <td class="px-6 py-4">
                                                    - Clear debris, undesirable vegetation and other obstructions.<br>
                                                    - Repair minor cracks and rebuild severely cracked channels on
                                                    drainage.
                                                </td>
                                            </tr>
                                            <tr class="bg-white border-b">
                                                <td class="px-6 py-4">Weepholes and Drainage Pipes</td>
                                                <td class="px-6 py-4">
                                                    - Clear obstructions (e.g., weeds and debris) in weepholes and pipe
                                                    ends.
                                                </td>
                                            </tr>
                                            <tr class="bg-white border-b">
                                                <td rowspan="3" class="px-6 py-4 font-medium text-gray-900">Instability
                                                    Inspection</td>
                                                <td class="px-6 py-4">Seepage</td>
                                                <td class="px-6 py-4">
                                                    - Identification of seepage.<br>
                                                    - Drain the seepage with vertical and horizontal drains.
                                                </td>
                                            </tr>
                                            <tr class="bg-white border-b">
                                                <td class="px-6 py-4">Cracking and Deformation</td>
                                                <td class="px-6 py-4">
                                                    - Record and monitor cracks on slopes and slope reinforcement
                                                    surfaces.<br>
                                                    - Record and monitor signs of deformation on the slope.
                                                </td>
                                            </tr>
                                            <tr class="bg-white border-b">
                                                <td class="px-6 py-4">Rainfall</td>
                                                <td class="px-6 py-4">
                                                    - Record the rainfall.
                                                </td>
                                            </tr>
                                            <tr class="bg-white">
                                                <td class="px-6 py-4 font-medium text-gray-900">Geological Inspection
                                                </td>
                                                <td class="px-6 py-4">Rock Slope and Boulders</td>
                                                <td class="px-6 py-4">
                                                    - Removal of loose rock debris and undesirable vegetation from rock
                                                    slopes or around boulders.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endif
                                </div>

                                <x-primary-link href="/create/maintenance/{{$slope->slug}}">
                                    Start Maintenance
                                </x-primary-link>
                            </div>

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-100 dark:bg-gray-800" id="styled-dashboard"
                            role="tabpanel" aria-labelledby="dashboard-tab">

                            @if (!$maintenances->isEmpty())
                            <div class="grid grid-cols-4 gap-3">
                                @foreach ($maintenances as $item)
                                <div class="bg-gray-200 border border-gray-300 hover:border-lime-600 rounded-xl p-3">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <div class="rounded-xl bg-gray-300 text-gray-600 p-5">
                                                <svg class="w-6 h-6 " aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M7 8v8a5 5 0 1 0 10 0V6.5a3.5 3.5 0 1 0-7 0V15a2 2 0 0 0 4 0V8" />
                                                </svg>
                                            </div>
                                            <div class="ml-2">
                                                <h4 class="text-sm font-bold">
                                                    Maintenance<br>
                                                    {{date('d M Y', strtotime($item->created_at))}}
                                                </h4>
                                                <p class="text-xs">Template File</p>
                                            </div>
                                        </div>

                                        <div class="text-sm">
                                            @foreach (json_decode($item->img) as $i)
                                            @if ($i->type == 'file_maintenance')
                                            <a download target="_blank"
                                                href="/storage/{{$slope->slug}}/maintenance-{{str_replace('/','',$item->date_of_maintenance)}}/{{$i->file}}/{{$i->img}}">
                                                Download
                                            </a>
                                            @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <div class=" bg-gray-200 rounded-lg p-5 text-center">
                                Routine Inspection has never been carried out
                            </div>
                            @endif

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>
</x-app-layout>