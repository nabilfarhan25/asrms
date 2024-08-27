<x-form-layout>
    <div class="p-5">
        <div class="flex justify-between p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div>
                <!-- Breadcrumb -->
                <nav class="sm:flex justify-between hidden" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center">
                        <li>
                            <div class="flex items-center">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 16 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm9-10v.4A3.6 3.6 0 0 1 8.4 9H6.61A3.6 3.6 0 0 0 3 12.605M14.458 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                </svg>
                                <a href="/"
                                    class="mr-3 text-sm font-medium text-gray-700 hover:text-lime-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
                            </div>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <button id="dropdownDatabase" data-dropdown-toggle="dropdown-database"
                                    class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700">

                                    <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10 3v4a1 1 0 0 1-1 1H5m4 10v-2m3 2v-6m3 6v-3m4-11v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                                    </svg>

                                    Slope Inventory<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <div id="dropdown-database"
                                    class="bg-white z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownDefault">
                                        <li>
                                            <a href="/inventory"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Slope
                                                Inventory</a>
                                        </li>
                                        <li>
                                            <a href="/management"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Slope
                                                Priority</a>
                                        </li>
                                        <li>
                                            <a href="/inspection"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Inspection</a>
                                        </li>
                                        <li>
                                            <a href="mitigation"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mitigation</a>
                                        </li>
                                        <li>
                                            <a href="/map"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Slope
                                                Info</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ol>
                </nav>

            </div>
            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                class="inline-flex items-center p-2 text-sm font-medium text-center rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
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

        <div class="max-w-7xl mx-auto lg:px-8 space-y-6">
            <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl" x-data="formHandler()">
                <form action="" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="slug" value="{{$slope->slug}}">

                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-xl">
                            FEATURE NO : {{$slope->slope_name}}
                        </h2>
                        <x-primary-button type="submit">Next</x-primary-button>
                    </div>
                    <x-line />

                    @if ($slope->slope_type === 'cut-type')
                    @include('inventory.partials.add_cut_rating')
                    @elseif($slope->slope_type === 'rock-type')
                    @include('inventory.partials.add_rock_rating')
                    @elseif($slope->slope_type === 'fill-type')
                    @include('inventory.partials.add_fill_rating')
                    @elseif($slope->slope_type === 'retaining-type')
                    @include('inventory.partials.add_retaining_rating')
                    @elseif($slope->slope_type === 'combine-type')
                    @include('inventory.partials.add_combine_rating')
                    @endif
                </form>
            </div>
        </div>
    </div>
</x-form-layout>