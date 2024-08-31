<x-app-layout>
    {{--
    <x-header /> --}}
    <div class="p-5">
        <div
            class="flex items-center justify-between p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div>
                <!-- Breadcrumb -->
                @php
                $bread = [
                ['url' => '/inspection', 'label' => 'Inspections'],
                ['url' => '/inspection/'.$slope->slug, 'label' => $slope->slope_name],
                ['url' => '/engineer-inspection/'.$slope->slug, 'label' => 'Engineering Maintenance','active' => true],

                ];
                @endphp
                <x-bread :items="$bread" />

            </div>
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
                                    {{date('d M Y', strtotime($maintenance->updated_at))}}
                                </h2>
                            </div>
                            <div class="w-full">
                                Next inspection :
                                <h2 class="font-bold text-lg">
                                    {{date('d M Y', strtotime($maintenance->maintenance_inspection))}}
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
                    Current Slope Ranking
                </h2>

                <div class="grid grid-cols-4 gap-4 mb-20">
                    <div class="">
                        <p class="">
                            Ranking Score (RS) :
                        </p>
                        <x-line />
                        <h2 class="text-5xl text-bold">
                            {{round(json_decode($slope->ranking)->TS*0.062,2)}}
                        </h2>
                    </div>

                    <div class="">
                        <p class="">
                            Total Score (TS) :
                        </p>
                        <x-line />
                        <h2 class="text-5xl text-bold">
                            {{round(json_decode($slope->ranking)->TS,2)}}
                        </h2>
                    </div>

                    <div class="">
                        <p class="">
                            Instability Score (IS) :
                        </p>
                        <x-line />
                        <h2 class="text-5xl text-bold">
                            {{round(json_decode($slope->ranking)->IS,2)}}
                        </h2>
                    </div>

                    <div class="">
                        <p class="">
                            Consequence Score (CS) :
                        </p>
                        <x-line />
                        <h2 class="text-5xl text-bold">
                            {{round(json_decode($slope->ranking)->CS,2)}}
                        </h2>
                    </div>

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
                                    aria-selected="false">Start Inspection</button>
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
                                    Start Inspection
                                </h3>

                                <div class="mb-3">
                                    <h2>Scope of Inspections</h2>
                                    <ul class="list-disc list-inside text-sm">
                                        <li>to re-assess the Priority Ranking for Man-made Slopes and Retaining Walls
                                        </li>
                                        <li>to re-assess the consequence-to-life category of the slope or retaining wall
                                        </li>
                                        <li>to check that Routine Maintenance Inspections have been carried out and
                                            documented satisfactorily</li>
                                        <li>to identify all visible changes and signs of damage, including any
                                            landslides occurring on or around the slope or retaining wall, in particular
                                            changes since the previous Stability Assessment if this has been carried out
                                        </li>
                                        <li>to assess the adequacy of routine maintenance works</li>
                                        <li>to re-assess the required frequency of Routine Maintenance Inspections,
                                            Engineer Inspections for Maintenance and Regular Checks of Buried
                                            Water-carrying Services</li>
                                        <li>to advise whether a Stability Assessment of the slope or retaining wall is
                                            necessary</li>
                                        <li>to recommend the necessary preventive maintenance works</li>
                                    </ul>
                                </div>

                                <x-primary-link href="/inspection/geometry/{{$slope->slug}}">
                                    Start Inspection
                                </x-primary-link>
                            </div>

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-100 dark:bg-gray-800" id="styled-dashboard"
                            role="tabpanel" aria-labelledby="dashboard-tab">

                            @if(!$inspections->isEmpty())
                            @foreach ($inspections as $inspection)
                            <a href="/engineer-inspection/{{$inspection->slug}}/{{$inspection->id}}">
                                <div
                                    class="flex px-5 py-3 mb-4 rounded-lg bg-gray-200 border border-gray-300 hover:border-lime-600">
                                    <div class="w-full border-r border-gray-300">
                                        <p class="text-sm text-gray-500">
                                            Inspection on:
                                        </p>
                                        <div class="text-lg font-bold"> {{date('d F Y',
                                            strtotime($inspection->updated_at))}}</div>
                                    </div>
                                    <div class="w-full md:block hidden text-center border-r border-gray-300">
                                        <p class="text-sm text-gray-500">
                                            Ranking Score :
                                        </p>
                                        <div class=" font-semibold">
                                            {{round(json_decode($inspection->ranking)->TS*0.062,2)}}
                                        </div>
                                    </div>

                                    <div class="w-full md:block hidden text-center border-r border-gray-300">
                                        <p class="text-sm text-gray-500">
                                            Total Score :
                                        </p>
                                        <div class=" font-semibold">{{round(json_decode($inspection->ranking)->TS,2)}}
                                        </div>
                                    </div>
                                    <div class="w-full md:block hidden text-center border-r border-gray-300">
                                        <p class="text-sm text-gray-500">
                                            Instability Score :
                                        </p>
                                        <div class=" font-semibold">{{round(json_decode($inspection->ranking)->IS,2)}}
                                        </div>
                                    </div>
                                    <div class="w-full md:block hidden text-center">
                                        <p class="text-sm text-gray-500">
                                            Consequence Score :
                                        </p>
                                        <div class=" font-semibold">{{round(json_decode($inspection->ranking)->CS,2)}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
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