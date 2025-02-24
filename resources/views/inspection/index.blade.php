<x-app-layout>
    {{--
    <x-header /> --}}
    <div class="p-5">
        <x-header />
        <div class="flex justify-between py-2 px-3 sm:px-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <!-- Breadcrumb -->
            @php
            $bread = [
            ['url' => '/inspection', 'label' => 'Inspections','active' => true],
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

        <div class="sm:grid grid-cols-5 gap-2 mb-5">
            <x-menu title="Slope Inspection System" image="inspection-bg.webp" active="inspection"></x-menu>

            <div class="col-span-2">
                <div class=" p-3 sm:p-5 bg-white border border-gray-200 shadow-sm rounded-2xl h-96">
                    <h2 class="font-bold text-xl mb-4">
                        Schedule Inspection
                    </h2>

                    <div class="mb-4">
                        <ul class="flex flex-wrap text-sm font-medium text-center" id="default-styled-tab"
                            data-tabs-toggle="#default-styled-tab-content" data-tabs-defaultTabId="styled-dashboard"
                            data-tabs-active-classes="text-lime-600 hover:text-lime-600 bg-white border border-gray-100"
                            data-tabs-inactive-classes="bg-gray-200 dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            role="tablist">
                            <li class="rounded-l-full bg-gray-200" role="presentation">
                                <button class="inline-block py-3 px-4 rounded-full" id="profile-styled-tab"
                                    data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="true">Yearly</button>
                            </li>
                            <li class="rounded-r-full bg-gray-200" role="presentation">
                                <button
                                    class="inline-block py-3 px-4 rounded-full hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                    id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button"
                                    role="tab" aria-controls="dashboard"
                                    aria-selected="{{isset($selected['year']) ? 'true' : 'false'}}">Decade</button>
                            </li>

                        </ul>
                    </div>
                    <div id="default-styled-tab-content">
                        <div class="hidden p-4 rounded-lg bg-gray-100 dark:bg-gray-800" id="styled-profile"
                            role="tabpanel" aria-labelledby="profile-tab">

                            <form action="" method="POST">
                                @csrf
                                <div class="grid grid-cols-4 gap-2">
                                    @for ($i = 1; $i <= 12; $i++) @php $monthName=DateTime::createFromFormat('!m', $i)->
                                        format('F');

                                        @endphp
                                        <button value="{{$i}}" name="month">
                                            <div
                                                class="{{$selected['month']==$i ? 'bg-gray-200 border-lime-500' : 'bg-gray-50 border-gray-300' }} border px-3 py-4  rounded-xl text-center font-bold hover:border-lime-600">
                                                {{$monthName}}
                                            </div>
                                        </button>
                                        @endfor
                                </div>
                            </form>

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard"
                            role="tabpanel" aria-labelledby="dashboard-tab">
                            <form action="" method="POST">
                                @csrf
                                <div class="grid grid-cols-4 gap-2">
                                    @for ($i = date('Y'); $i < date('Y')+11; $i++) <button value="{{$i}}" name="year">
                                        <div
                                            class="{{$selected['year']==$i ? 'bg-gray-200 border-lime-500' : 'bg-gray-50 border-gray-300' }} border px-3 py-4 rounded-xl text-center font-bold hover:border-lime-600 ">
                                            {{$i}}
                                        </div>
                                        </button>

                                        @endfor
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        {{-- ALERT --}}
        @if ($errors->any())
        <div id="alert-2"
            class="flex p-4 mb-4 text-red-800 rounded-lg border border-red-600 bg-red-200 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <div>
                <div class="flex items-center">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Danger</span>
                    <span class="font-medium">Ensure that these requirements are met:</span>
                </div>
                <ul class="mt-1.5 list-disc list-inside ml-8">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        @endif

        <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div class="sm:flex justify-between mb-5">
                <div>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <input type="text" id="table-search" name="search"
                                class="block p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full w-80 bg-gray-50 focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                placeholder="Search for Slope">
                        </form>
                    </div>
                </div>
                {{-- --}}
            </div>

            @foreach ($slopes as $slope)

            <div
                class="flex px-5 py-3 mb-4 rounded-lg bg-gray-50 border border-gray-200 dark:bg-gray-800 hover:bg-gray-100">
                <div class="w-full border-r border-gray-300">
                    <div class="text-lg font-bold">{{$slope->slope_name}}</div>
                    <p class="text-sm text-gray-500">
                        Location: {{$slope->location}}
                    </p>
                </div>

                <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                    <p class="text-sm my-auto text-gray-500">Side of Road : <span
                            class="font-semibold text-gray-800">{{$slope->side_of_road}}</span>
                    </p>
                </div>
                <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                    <p class="text-sm my-auto text-gray-500 text-center">Slope Type : <br> <span
                            class="text-base font-semibold border-2 border-gray-300 px-3 rounded-full text-gray-800">
                            {{$slope->slope_type}}</span>
                    </p>
                </div>

                <div class="w-full flex items-center justify-center text-center border-r border-gray-300">
                    <div>
                        <p class="text-sm text-gray-500">
                            Ranking Slope (RS) :
                        </p>
                        <div class=" font-semibold">{{round(json_decode($slope->ranking)->RS,2)}}</div>
                    </div>
                </div>
                <div class="w-full border-r border-gray-300">
                    <div class="flex items-center px-4">
                        <svg class="w-8 h-8 mr-3 text-lime-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                        <div>
                            <p class="text-sm text-gray-500">
                                Next Engineer Maintenance
                            </p>
                            <div class=" font-semibold">
                                {{ date('d M Y', strtotime($slope->engineer_inspection))}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full border-r border-gray-300">
                    <div class="flex items-center px-4">
                        <svg class="w-8 h-8 mr-3 text-lime-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                        </svg>
                        <div>
                            <p class="text-sm text-gray-500">
                                Next Routine Maintenance
                            </p>
                            <div class=" font-semibold">
                                {{ date('d M Y', strtotime($slope->maintenance_inspection))}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:flex hidden items-center justify-end pl-5">
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <a href="/inspection/{{$slope->slug}}"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-2 focus:ring-lime-700 focus:text-lime-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-lime-500 dark:focus:text-white">
                            <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            Preview
                        </a>
                        <a href="/pdf-rating/{{$slope->slug}}" target="_blank"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-2 focus:ring-lime-700 focus:text-lime-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-lime-500 dark:focus:text-white">
                            <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                <path
                                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                            </svg>
                            Downloads
                        </a>
                    </div>
                </div>

                @if ($slope->appr_management == "unverified")
                unverified
                @endif
            </div>

            @endforeach
            @if(!$slopes->isNotEmpty())
            <div>
                <p class=" text-center text-gray-500 font-semibold py-2 bg-stone-100">No Data can be
                    Found
                </p>
            </div>
            @endif
        </div>
    </div>

    {{$selected['month']}}
</x-app-layout>