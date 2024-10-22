<x-form-layout>
    <div class="p-5">
        <x-header />
        <div class="flex justify-between py-2 px-3 sm:px-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <!-- Breadcrumb -->
            @php
            $bread = [
            ['url' => '/inventory', 'label' => 'Slope Inventory'],
            ['url' => '', 'label' => 'Disaster Record - '.$slope->slope_name,'active' => true],

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

                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl mb-3">
                                <span class="text-gray-600">FEATURE NO : </span>{{$slope->slope_name}}
                            </h2>
                            <x-slope-type type="{{$slope->slope_type}}" side="{{$slope->side_of_road}}" />
                        </div>
                        <div>
                            <x-primary-button>Next</x-primary-button>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Time of Occurrence</h4>

                        </div>
                        <div class="col-span-4">
                            <div class="mb-3">
                                <p class="font-medium text-gray-800 mb-1">
                                    Date of occurrence:
                                </p>
                                <!-- Input Field -->
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input id="occurrence_date" datepicker datepicker-format="dd/mm/yyyy" type="text"
                                        name="date_of_occurrence" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                        placeholder="Select date">
                                </div>
                            </div>
                            <div class="mb-3">
                                <p class="font-medium text-gray-800 mb-1">
                                    Time of occurrence:
                                </p>
                                <!-- Input Field -->
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="time" id="time" name="time_of_occurrence"
                                        class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                        value="00:00" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Type of Failure</h4>

                        </div>
                        <div class="col-span-4">
                            <div
                                x-data="{ type_of_failure: '{{isset($characteristic->type_of_failure) ? $characteristic->type_of_failure : ''}}' }">
                                <p class="font-medium text-gray-800 mb-1">
                                    Chooes type of failure :
                                </p>
                                <!-- Input Field -->
                                <input type="text" placeholder="Write or choose option to fill input" required
                                    name="type_of_failure"
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                    x-model="type_of_failure" />

                                <!-- Radio Buttons -->
                                <div class="mt-3">
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="fail_opt1" value="Landslide" x-model="type_of_failure"
                                            class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                                        dark:border-gray-600" />
                                        <label for="fail_opt1"
                                            class="ms-2 text-sm text-gray-900 dark:text-gray-300">Landslide</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="fail_opt2" value="Collapse" x-model="type_of_failure"
                                            class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                                        dark:border-gray-600" />
                                        <label for="fail_opt2"
                                            class="ms-2 text-sm text-gray-900 dark:text-gray-300">Collapse</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="fail_opt3" value="Rockfall" x-model="type_of_failure"
                                            class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                                        dark:border-gray-600" />
                                        <label for="fail_opt3"
                                            class="ms-2 text-sm text-gray-900 dark:text-gray-300">Rockfall</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="fail_opt4" value="Rock Mass Failure"
                                            x-model="type_of_failure" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                                        dark:border-gray-600" />
                                        <label for="fail_opt4"
                                            class="ms-2 text-sm text-gray-900 dark:text-gray-300">Rock Mass
                                            Failure</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="fail_opt5" value="Debris Flow" x-model="type_of_failure"
                                            class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                                        dark:border-gray-600" />
                                        <label for="fail_opt5"
                                            class="ms-2 text-sm text-gray-900 dark:text-gray-300">Debris Flow</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="fail_opt6" value="Embankment Failure"
                                            x-model="type_of_failure" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                                        dark:border-gray-600" />
                                        <label for="fail_opt6"
                                            class="ms-2 text-sm text-gray-900 dark:text-gray-300">Embankment
                                            Failure</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Dimension of Slope Failure</h4>

                        </div>
                        <div class="col-span-4">
                            <div class="mb-3">
                                <p class="font-medium text-gray-800 mb-1">
                                    Length (m) in Longitudinal direction of road:
                                </p>
                                <!-- Input Field -->
                                <input type="number" placeholder="Enter number of length (m)"
                                    name="length_of_slope_failure"
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />

                            </div>
                            <div class="mb-3">
                                <p class="font-medium text-gray-800 mb-1">
                                    Height (m):
                                </p>
                                <!-- Input Field -->
                                <input type="number" placeholder="Enter number of height (m)"
                                    name="height_of_slope_failure"
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />

                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Volume of Fallen Debris/Rocks</h4>
                        </div>
                        <div class="col-span-4">
                            <div class="mb-3">
                                <p class="font-medium text-gray-800 mb-1">
                                    Volume (m) :
                                </p>
                                <!-- Input Field -->
                                <input type="number" placeholder="Enter number of length (m)"
                                    name="volume_of_fallen_debris_rocks"
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Damage and Loss</h4>

                        </div>
                        <div class="col-span-4">
                            <div
                                x-data="{ type_of_damage: '{{isset($characteristic->type_of_damage) ? $characteristic->type_of_damage : ''}}' }">
                                <p class="font-medium text-gray-800 mb-1">
                                    Chooes type of damage :
                                </p>
                                <!-- Input Field -->
                                <input type="text" placeholder="Write or choose option to fill input"
                                    name="type_of_damage"
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                    x-model="type_of_damage" />

                                <!-- Radio Buttons -->
                                <div class="mt-3">
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="damage_opt1" value="Road" x-model="type_of_damage"
                                            class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                                        dark:border-gray-600" />
                                        <label for="damage_opt1"
                                            class="ms-2 text-sm text-gray-900 dark:text-gray-300">Road</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="damage_opt2" value="Road Structure"
                                            x-model="type_of_damage" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                                        dark:border-gray-600" />
                                        <label for="damage_opt2"
                                            class="ms-2 text-sm text-gray-900 dark:text-gray-300">Road Structure</label>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <input type="radio" id="damage_opt3" value="Vihicles" x-model="type_of_damage"
                                            class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                                        dark:border-gray-600" />
                                        <label for="damage_opt3"
                                            class="ms-2 text-sm text-gray-900 dark:text-gray-300">Vihicles</label>
                                    </div>

                                </div>
                            </div>
                            <div class="mb-3">
                                <p class="font-medium text-gray-800 mb-1">
                                    Death or Injury :
                                </p>
                                <!-- Input Field -->
                                <input type="number" placeholder="Enter number of death or injury"
                                    name="death_or_injury"
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Emergency Operation</h4>

                        </div>
                        <div class="col-span-4">
                            <div class="mb-3">
                                <p class="font-medium text-gray-800 mb-1">
                                    Scope of Operation:
                                </p>
                                <!-- Input Field -->
                                <input type="text" placeholder="Discribe scope of operation" name="scope_of_operation"
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />

                            </div>
                            <div class="mb-3">
                                <p class="font-medium text-gray-800">
                                    Trafic Blockade Duration:
                                </p>
                                <!-- Input Field -->
                                <div class="grid grid-cols-2 gap-2">
                                    <div>
                                        <p class="text-sm">
                                            Yes/No
                                        </p>
                                        <input type="text" placeholder="Yes or No" name="traffic_blockade"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
                                    </div>
                                    <div>
                                        <p class="text-sm">
                                            Hour/Days/Months
                                        </p>
                                        <input type="text" placeholder="Write or choose option to fill input"
                                            name="traffic_blockade_duration"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Rainfall</h4>
                            <p>(Before the Failure)</p>
                        </div>
                        <div class="col-span-4">
                            <div class="mb-3">
                                <p class="font-medium text-gray-800">
                                    24 hours rainfall of the day:
                                </p>
                                <!-- Input Field -->
                                <div class="grid grid-cols-2 gap-2 mb-3">
                                    <div class="">
                                        <p class="text-sm">
                                            (mm)
                                        </p>
                                        <input type="number" placeholder="mm" name="rainfall_24_hours"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
                                    </div>
                                    <div class="">
                                        <p class="text-sm">
                                            Date
                                        </p>
                                        <div class="relative max-w-sm">
                                            <div
                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input id="rainfall_date" datepicker datepicker-format="dd/mm/yyyy"
                                                type="text" name="rainfall_date"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                                placeholder="Select date">
                                        </div>

                                    </div>
                                </div>

                                <p class="font-medium text-gray-800">
                                    Maximum hourly rainfall:
                                </p>
                                <div class="grid grid-cols-3 gap-2 mb-3">
                                    <div class="">
                                        <p class="text-sm">
                                            (mm)
                                        </p>
                                        <input type="number" placeholder="mm" name="maximum_hourly_rainfall"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
                                    </div>
                                    <div class="">
                                        <p class="text-sm">
                                            Date
                                        </p>
                                        <div class="relative max-w-sm">
                                            <div
                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input id="maximum_date" datepicker datepicker-format="dd/mm/yyyy"
                                                type="text" name="maximum_rainfall_date"
                                                class="bg-gray-50  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                                placeholder="Select date">
                                        </div>

                                    </div>
                                    <div class="">
                                        <p class="text-sm">
                                            Time
                                        </p>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input type="time" id="time" name="maximum_rainfall_time"
                                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                                value="00:00" required />
                                        </div>

                                    </div>
                                </div>

                                <p class="font-medium text-gray-800">
                                    Total for proceeding 3 days:
                                </p>
                                <div class="grid grid-cols-3 gap-2 mb-3">
                                    <div class="">
                                        <p class="text-sm">
                                            (mm)
                                        </p>
                                        <input type="number" placeholder="mm" name="total_rainfall_proceeding_3_days"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
                                    </div>
                                    <div class="">
                                        <p class="text-sm">
                                            Date from
                                        </p>
                                        <div class="relative max-w-sm">
                                            <div
                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input id="total_date_from" datepicker datepicker-format="dd/mm/yyyy"
                                                type="text" name="rainfall_date_from"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                                placeholder="Select date">
                                        </div>

                                    </div>
                                    <div class="">
                                        <p class="text-sm">
                                            To
                                        </p>
                                        <div class="relative max-w-sm">
                                            <div
                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                </svg>
                                            </div>
                                            <input id="total_date_to" datepicker datepicker-format="dd/mm/yyyy"
                                                type="text" name="rainfall_date_to"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                                placeholder="Select date">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Data Source</h4>
                        </div>
                        <div class="col-span-4">
                            <div class="mb-3">
                                <p class="font-medium text-gray-800 mb-1">
                                    Source :
                                </p>
                                <!-- Input Field -->
                                <input type="text" placeholder="Enter data source" name="data_source"
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Pavement Condition</h4>
                        </div>
                        <div class="col-span-4">
                            <div class="mb-3">
                                <div class="grid grid-cols-2 gap-2">
                                    <div>
                                        <p class="text-sm mb-2">Cracks (Yes/No)</p>
                                        <!-- Select Field -->
                                        <select placeholder="Yes or No" name="pavement_cracks"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                            <option value="" selected hidden>Select Yes or No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div>
                                        <p class="text-sm mb-2">Cause of Cracks (Pavement/Slope Failure)</p>
                                        <!-- Select Field -->
                                        <select name="cause_of_cracks"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                            <option value="" selected hidden>Select Pavement or Slope Failure</option>
                                            <option value="Pavement">Pavement</option>
                                            <option value="Slope Failure">Slope Failure</option>
                                        </select>
                                    </div>

                                    <div>
                                        <p class="text-sm mb-2">Cracks Sealed (Yes/No)</p>
                                        <!-- Select Field -->
                                        <select placeholder="Yes or No" name="cracks_sealed"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                            <option value="" selected hidden>Select Yes or No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div>
                                        <p class="text-sm mb-2">Depression (Yes/No)</p>
                                        <!-- Select Field -->
                                        <select placeholder="Yes or No" name="pavement_depression"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                            <option value="" selected hidden>Select Yes or No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Shoulder Condition</h4>
                        </div>
                        <div class="col-span-4">
                            <div class="mb-3">
                                <div class="grid grid-cols-2 gap-2">
                                    <div>
                                        <p class="text-sm mb-2">Shoulder Cracks (Yes/No)</p>
                                        <!-- Select Field -->
                                        <select placeholder="Yes or No" name="shoulder_cracks"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                            <option value="" selected hidden>Select Yes or No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div>
                                        <p class="text-sm mb-2">Shoulder Depression</p>
                                        <!-- Select Field -->
                                        <select name="shoulder_depression"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                            <option value="" selected hidden>Select Yes or No</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <x-line />
                    <div class="grid sm:grid-cols-7 gap-4">
                        <div class="col-span-3">
                            <h4 class="font-bold">Shoulder Condition</h4>
                        </div>
                        <div class="col-span-4">
                            <div class="mb-3">
                                <x-file-upload name="img_record" title="Upload Slope Record Documentation"
                                    required="true" maxFileSize="30MB" type="image" maxFiles="5" multiple notes="" />
                            </div>
                        </div>

                    </div>
                    <x-line />

                </form>
            </div>
        </div>
    </div>
</x-form-layout>