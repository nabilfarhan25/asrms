<x-form-layout>
    <div class="p-5">
        <x-header />
        <div class="flex justify-between py-2 px-3 sm:px-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <!-- Breadcrumb -->
            @php
            $bread = [
            ['url' => '/inventory', 'label' => 'Slope Inventory'],
            ['url' => '', 'label' => 'Create - '.$slope->slope_name,'active' => true],

            ];
            @endphp
            <x-bread :items="$bread" />


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

                    <x-line />
                    <div class="">
                        <div class="form-section mb-4">
                            <div class="flex justify-between items-center">
                                <legend class="text-lg font-semibold mb-2">LHRA & SMART Scoring</legend>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="mb-2">
                                    <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">LHRA
                                        Rating:</label>
                                    <select
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                        name="lhra_category" id="">
                                        <option>Low Hazard</option>
                                        <option>Moderate Hazard</option>
                                        <option>High Hazard</option>

                                    </select>
                                </div>

                                <div class="mb-2">
                                    <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">SMART
                                        Rating:</label>
                                    <select
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                        name="smart_category" id="">
                                        <option>Very Low</option>
                                        <option>Low</option>
                                        <option>Medium</option>
                                        <option>High</option>
                                        <option>Very High</option>
                                    </select>
                                </div>

                                <div class="mb-2">
                                    <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Y
                                        Value:</label>
                                    <input value="0" type="number" step="0.01" name="y_value"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </div>

                                <div class="mb-2">
                                    <label
                                        class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Scoring:</label>
                                    <input value="0" type="number" step="0.01" name="lhra_score"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </div>

                                <div class="mb-2">
                                    <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">P
                                        Value:</label>
                                    <input value="0" type="number" step="0.01" name="p_value"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </div>

                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-form-layout>