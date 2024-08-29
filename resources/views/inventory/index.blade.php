<x-app-layout>

    <div class="p-5">
        <div class="flex justify-between p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <!-- Breadcrumb -->
            @php
            $bread = [
            ['url' => '/inventory', 'label' => 'Slope Inventory','active' => true],
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

        <div class="sm:grid grid-cols-4 gap-2 mb-5">
            <x-menu title="Slope Inventory System" image="inventory-bg.webp" active="inventory"></x-menu>
            <div>
                <div
                    class=" p-3 sm:p-5 h-32 bg-white border border-gray-200 shadow-sm rounded-2xl mb-2 hover:bg-lime-600 group transition duration-150">
                    <h2
                        class="text-3xl font-thin group-hover:text-white group-hover:animate-fade-left animate-once animate-duration-500 animate-ease-in-out">
                        {{count($slopes)}} Slope
                    </h2>
                    <p class="text-lg font-semibold text-gray-800">
                        Total Slope
                    </p>
                </div>
                <div
                    class=" p-3 sm:p-5 h-32 bg-white border border-gray-200 shadow-sm rounded-2xl mb-2 hover:bg-lime-600 group transition duration-150">
                    <h2
                        class="text-3xl font-thin group-hover:text-white group-hover:animate-fade-left animate-once animate-duration-500 animate-ease-in-out">
                        {{$sideA}} Slope
                    </h2>
                    <p class="text-lg font-semibold text-gray-800">
                        Side A
                    </p>
                </div>
                <div
                    class=" p-3 sm:p-5 h-32 bg-white border border-gray-200 shadow-sm rounded-2xl hover:bg-lime-600 group transition duration-150">
                    <h2
                        class="text-3xl font-thin group-hover:text-white group-hover:animate-fade-left animate-once animate-duration-500 animate-ease-in-out">
                        {{$sideB}} Slope
                    </h2>
                    <p class="text-lg font-semibold text-gray-800">
                        Side B
                    </p>
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

                        <input type="text" id="table-search"
                            class="block p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full w-80 bg-gray-50 focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                            placeholder="Search for Slope">

                    </div>
                </div>
                @auth
                @if (Auth::user()->role === 'admin')
                <x-primary-button data-modal-target="addslope-modal" data-modal-toggle="addslope-modal" type="button">
                    Add Slope
                </x-primary-button>

                <!-- Add Slope modal -->
                <div id="addslope-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-3xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-3xl shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Add New Slope
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="addslope-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form class="p-4 md:p-5" method="POST" action="">
                                @csrf

                                <div class="grid gap-4 mb-4 grid-cols-2">

                                    <div class="col-span-2">
                                        <label for="" class="block mb-2 font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Slope
                                            Type</label>
                                        <div class="mb-5 grid w-full gap-3 md:grid-cols-4 text-lg">
                                            <label>
                                                <input type="radio" name="slope_type" value="cut-type" checked
                                                    class="hidden peer" />
                                                <div
                                                    class="cursor-pointer py-4 px-3 flex items-center border-2 border-gray-300 rounded-xl peer-checked:border-lime-500">
                                                    <div>
                                                        <img src="/icons/cut-type.svg" class="w-10 h-10" alt="">
                                                        <div class="font-bold">Cut Slope</div>
                                                    </div>
                                                </div>
                                            </label>

                                            <label>
                                                <input type="radio" name="slope_type" value="fill-type"
                                                    class="hidden peer" />
                                                <div
                                                    class="cursor-pointer py-4 px-3 flex items-center border-2 border-gray-300 rounded-xl peer-checked:border-lime-500">
                                                    <div>
                                                        <img src="/icons/fill-type.svg" class="w-10 h-10" alt="">
                                                        <div class="font-bold">Fill Slope</div>
                                                    </div>
                                                </div>
                                            </label>

                                            <label>
                                                <input type="radio" name="slope_type" value="rock-type"
                                                    class="hidden peer" />
                                                <div
                                                    class="cursor-pointer py-4 px-3 flex items-center border-2 border-gray-300 rounded-xl peer-checked:border-lime-500">
                                                    <div>
                                                        <img src="/icons/rock-type.svg" class="w-10 h-10" alt="">
                                                        <div class="font-bold">Rock Slope</div>
                                                    </div>
                                                </div>
                                            </label>

                                            <label>
                                                <input type="radio" name="slope_type" value="retaining-type"
                                                    class="hidden peer" />
                                                <div
                                                    class="cursor-pointer py-4 px-3 flex items-center border-2 border-gray-300 rounded-xl peer-checked:border-lime-500">
                                                    <div>
                                                        <img src="/icons/retaining-type.svg" class="w-10 h-10" alt="">
                                                        <div class="font-bold">Retaining Wall</div>
                                                    </div>
                                                </div>
                                            </label>

                                            <label>
                                                <input type="radio" name="slope_type" value="combine-type"
                                                    class="hidden peer" />
                                                <div
                                                    class="cursor-pointer py-4 px-3 flex items-center border-2 border-gray-300 rounded-xl peer-checked:border-lime-500">
                                                    <div>
                                                        <img src="/icons/combine-type.svg" class="w-10 h-10" alt="">
                                                        <div class="font-bold">Combine Slope</div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <x-line />
                                    </div>

                                    <div class="col-span-2">
                                        <label for="slope_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Slope
                                            Name</label>
                                        <input type="text" name="slope_name" id="slope_name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="Type a unique slope name">
                                    </div>

                                    <div class="col-span-2">
                                        <label for="location"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Location</label>
                                        <input type="text" name="location" id="location"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="">
                                    </div>

                                    <div class="col-span-2">
                                        <label for="category"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>Side
                                            of Road</label>
                                        <select id="category" name="side_of_road"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                            <option value="" selected hidden>Select Side..</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>

                                        </select>
                                    </div>

                                    <div class="col-span-2">
                                        <label for="sta1"
                                            class="block text-sm font-medium text-gray-900 dark:text-white"><span
                                                class="text-red-600">*</span>KM</label>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="sta1" id="sta1"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="0+000">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="sta2" id="sta2"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="0+000">
                                    </div>

                                    <div class="col-span-2">
                                        <label for="latitude"
                                            class="block text-sm font-medium text-gray-900 dark:text-white">Coordinate</label>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="latitude" id="latitude"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="Latitude">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="longtitude" id="longtitude"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="Longtitude">
                                    </div>


                                    <div class="col-span-2">
                                        <label for="gps1"
                                            class="block text-sm font-medium text-gray-900 dark:text-white">GPS</label>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="gps1" id="gps1"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="S:">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <input type="text" name="gps2" id="gps2"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                            placeholder="E:">
                                    </div>
                                </div>

                                <button type="submit"
                                    class="text-white inline-flex items-center bg-lime-600 hover:bg-lime-800 focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-lime-600 dark:hover:bg-lime-700 dark:focus:ring-lime-800">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Add new slope
                                </button>


                            </form>
                        </div>
                    </div>
                </div>

                @endif
                @endauth
            </div>

            @foreach ($slopes as $slope)
            <div class="flex px-5 py-3 mb-4 rounded-lg bg-gray-50 border border-gray-200 hover:bg-gray-100">
                <div class="w-full border-r border-gray-300">
                    <div class="text-lg font-bold">{{$slope->slope_name}}</div>
                    <p class="text-sm text-gray-500">
                        Updated at: {{$slope->updated_at}}
                    </p>
                </div>
                <div class="w-full text-center border-r border-gray-300">
                    <p class="text-sm text-gray-500">
                        Location :
                    </p>
                    <div class=" font-semibold">{{$slope->location}}</div>
                </div>
                <div class="w-full md:block hidden text-center border-r border-gray-300">
                    <p class="text-sm text-gray-500">
                        KM :
                    </p>
                    <div class=" font-semibold">{{$slope->sta1}} - {{$slope->sta2}}</div>
                </div>
                <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                    <p class="text-sm my-auto text-gray-500">Side of Road : <span
                            class="font-semibold text-gray-800">{{$slope->side_of_road}}</span>
                    </p>
                </div>
                <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                    <p class="text-sm my-auto text-gray-500">Slope Type : <span
                            class="text-base font-semibold border-2 border-gray-300 px-3 rounded-full text-gray-800">
                            {{$slope->slope_type}}</span>
                    </p>
                </div>
                <div class="w-full sm:flex hidden items-center justify-end pl-5">
                    @if (Auth::user()->role === 'admin')
                    <button type="button" data-modal-target="modal-{{$slope->slug}}"
                        data-modal-toggle="modal-{{$slope->slug}}"
                        class="mr-3 text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-1 text-center inline-flex items-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800 dark:hover:bg-red-500">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                        </svg>
                    </button>

                    <div id="modal-{{$slope->slug}}" tabindex="-1"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button"
                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="modal-{{$slope->slug}}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 md:p-5 text-center">
                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                        Are you sure you want to delete {{$slope->slope_name}}?</h3>
                                    <div class="flex justify-center">
                                        <form action="/slope/{{$slope->slug}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" data-modal-hide="modal-{{$slope->slug}}" type="button"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                Yes, I'm sure
                                            </button>
                                        </form>
                                        <button data-modal-hide="modal-{{$slope->slug}}" type="button"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                            cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <a href="/inventory/{{$slope->slug}}"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-2 focus:ring-lime-700 focus:text-lime-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-lime-500 dark:focus:text-white">
                            <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2"
                                    d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            Detail
                        </a>
                        <a href="/pdf-inventory/{{$slope->slug}}" target="_blank"
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
            </div>
            @endforeach
            @if(!$slopes->isNotEmpty())
            <div>
                <p class=" text-center text-gray-500 font-semibold py-2 bg-stone-100">No Data can be
                    Show
                </p>
            </div>
            @endif
        </div>
    </div>

</x-app-layout>