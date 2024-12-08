<x-app-layout>

    <div class="p-5">
        <x-header />
        <div class="flex justify-between py-2 px-3 sm:px-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <!-- Breadcrumb -->
            @php
            $bread = [
            // ['url' => '/', 'label' => 'Dashboard'],
            ['url' => '/management', 'label' => 'Slope Priority','active' => true],
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
            <x-menu title="Slope Priority System" image="management-bg.webp" active="management"></x-menu>

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

        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
                    <div class="sm:flex justify-between mb-5">
                        <div>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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

                        <div x-data="{ filter: '' }">
                            <form x-ref="filter" action="" method="POST">
                                @csrf
                                <select
                                    class="block p-3 px-6 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                    name="filter" x-model="filter" @change="$refs.filter.submit()">
                                    <option value="">Sort By ...</option>
                                    <option value="name">Name</option>
                                    <option value="low">Lowest Rank</option>
                                    <option value="high">Highest Rank</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div>
                        @php
                        $i=0;
                        @endphp
                        @foreach ($slopes as $slope)
                        <button data-latitude="{{ str_replace('°','',$slope->latitude) }}"
                            data-longitude="{{ str_replace('°','',$slope->longtitude) }}"
                            data-RS="{{ isset(json_decode($slope->ranking)->RS) ? round((float)json_decode($slope->ranking)->RS, 2) : '-' }}"
                            data-TS="{{ isset(json_decode($slope->ranking)->TS) ? round((float)json_decode($slope->ranking)->TS, 2) : '-' }}"
                            data-IS="{{ isset(json_decode($slope->ranking)->IS) ? round((float)json_decode($slope->ranking)->IS, 2) : '-' }}"
                            data-CS="{{ isset(json_decode($slope->ranking)->CS) ? round((float)json_decode($slope->ranking)->CS, 2) : '-' }}"
                            data-location="{{ $slope->location }}"
                            data-smart_category="{{ $slope->smart_category != null ? $slope->smart_category : '-'  }}"
                            data-lhra_category="{{ $slope->lhra_category != null ? $slope->lhra_category : '-'  }}"
                            data-slope_type="{{ $slope->slope_type }}" data-slug="{{ $slope->slug }}"
                            data-slope_name="{{ $slope->slope_name }}" onclick="updateMap(this)"
                            class="w-full text-left mb-4 rounded-xl border hover:border-gray-400">
                            <div class="flex px-5 py-3 ">

                                <div class="w-full border-r border-gray-300">
                                    <div class="text-lg font-bold">{{$slope->slope_name}}</div>
                                    <p class="text-sm text-gray-500">
                                        Updated at: {{$slope->updated_at}}
                                    </p>
                                </div>

                                <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                                    <p class="text-sm my-auto text-gray-500">Side of Road : <span
                                            class="font-semibold text-gray-800">{{$slope->side_of_road}}</span>
                                    </p>
                                </div>
                                <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                                    <p class="text-sm my-auto text-gray-500">Ranking Score : <span
                                            class="font-semibold text-gray-800">{{isset(json_decode($slope->ranking)->RS)
                                            ?
                                            round((float)json_decode($slope->ranking)->RS,2) : '-' }}</span>
                                    </p>
                                </div>
                                <div class="w-full sm:flex hidden items-center justify-center">
                                    <p class="text-sm my-auto text-gray-500 text-center">Slope Type : <br><span
                                            class="text-base font-semibold border-2 border-gray-300 px-3 rounded-full text-gray-800">
                                            {{$slope->slope_type}}</span>
                                    </p>

                                </div>

                            </div>
                        </button>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                    </div>
                    @if(!isset($slopes))
                    <div>
                        <p class=" text-center text-gray-500 font-semibold py-2 bg-stone-100">No Data can be
                            Show
                        </p>
                    </div>
                    @endif
                </div>
            </div>
            @if($slopes->isNotEmpty())
            <div class="">
                <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
                    <div id="title">
                        <h2
                            class="animate-fade-up animate-once animate-duration-200 animate-ease-in font-bold mb-3 text-2xl">
                            <span id="slope_name">{{$selectedSlope->slope_name}}</span>
                        </h2>
                    </div>
                    <div id="map" class="w-full rounded-xl h-64 mb-4 bg-gray-200"></div>

                    <div class="flex my-5">

                        <div class="w-full">
                            <div class="flex mb-10">
                                <div class="w-full px-2">
                                    <p class="text-sm">
                                        Ranking Score (RS) :
                                    </p>
                                    <x-line />
                                    <div id="rs">
                                        <h2
                                            class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">
                                            <span id="RS">{{ isset(json_decode($slope->ranking)->RS) ?
                                                round((float)json_decode($slope->ranking)->RS, 2) : '-' }}</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="w-full px-2">
                                    <p class="text-sm">
                                        Total Score (TS) :
                                    </p>
                                    <x-line />
                                    <div id="ts">
                                        <h2
                                            class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">
                                            <span id="TS">{{ isset(json_decode($slope->ranking)->TS) ?
                                                round((float)json_decode($slope->ranking)->TS, 2) : '-' }}</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="flex mb-10">
                                <div class="w-full px-2">
                                    <p class="text-sm">
                                        Instability Score (IS) :
                                    </p>
                                    <x-line />
                                    <div id="is">
                                        <h2
                                            class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">
                                            <span id="IS">{{ isset(json_decode($slope->ranking)->IS) ?
                                                round((float)json_decode($slope->ranking)->IS, 2) : '-' }}</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="w-full px-2">
                                    <p class="text-sm">
                                        Consequence Score (CS) :
                                    </p>
                                    <x-line />
                                    <div id="cs">
                                        <h2
                                            class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">
                                            <span id="CS">{{ isset(json_decode($slope->ranking)->CS) ?
                                                round((float)json_decode($slope->ranking)->CS, 2) : '-' }}</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <x-line />

                    <p class="text-gray-400 font-semibold">Score :</p>
                    <div class="relative overflow-x-auto">
                        <table class="mb-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Smart Rating
                                    </th>

                                    <td class="py-4">
                                        <div id="">
                                            <p
                                                class="animate-fade-left animate-once animate-duration-200 animate-ease-in">
                                                <span id="smart_category">{{$selectedSlope->smart_category}}</span>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        LHRA Rating
                                    </th>
                                    <td class="py-4">
                                        <div id="">
                                            <p
                                                class="animate-fade-left animate-once animate-duration-200 animate-ease-in">
                                                <span id="lhra_category">{{$selectedSlope->lhra_category}}</span>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <a id='link' href="/management/{{$selectedSlope->slug}}">
                        <div
                            class="text-lime-700 hover:text-white border border-lime-700 hover:bg-lime-600 focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-full w-full text-sm px-5 py-2.5 text-center mb-2">
                            More
                            Detail
                        </div>
                    </a>

                </div>
            </div>
            @endif
        </div>


        <script>
            let map, marker;
    
            // Initialize the Google Map
            function initMap() {
                const defaultLocation = { lat: {{ str_replace('°','',$selectedSlope->latitude) }}, lng:  {{ str_replace('°','',$selectedSlope->longtitude) }} }; // Default location
                map = new google.maps.Map(document.getElementById("map"), {
                    center: defaultLocation,
                    zoom: 13,
                });
    
                // Initialize marker at default location
                marker = new google.maps.Marker({
                    position: defaultLocation,
                    map: map,
                });
            }
    
            let selectedButton = null; // Variable to track the selected button
            // Function to update the map, marker, and other data based on button attributes
            function updateMap(button) {
                
                // Reset the style of the previously selected button
                if (selectedButton) {
                    selectedButton.classList.remove('border-lime-600', 'bg-gray-100');
                    selectedButton.classList.add('hover:border-lime-600'); // Add hover effect back
                }

                // Set the new selected button
                selectedButton = button;
                selectedButton.classList.add('border-lime-600', 'bg-gray-100');
                selectedButton.classList.remove('hover:border-lime-600'); // Remove hover effect


                const lat = parseFloat(button.getAttribute('data-latitude'));
                const lng = parseFloat(button.getAttribute('data-longitude'));
                const slope_name = button.getAttribute('data-slope_name');
                const RS = button.getAttribute('data-RS');
                const TS = button.getAttribute('data-TS');
                const IS = button.getAttribute('data-IS');
                const CS = button.getAttribute('data-CS');
                const slug = button.getAttribute('data-slug');
                const location = button.getAttribute('data-location');
                const slope_type = button.getAttribute('data-slope_type');
    
                const smart_category = button.getAttribute('data-smart_category');
                const lhra_category = button.getAttribute('data-lhra_category');



                const newLocation = { lat: lat, lng: lng };
    
                // Update marker position
                marker.setPosition(newLocation);
    
                // Center the map to the new location
                map.setCenter(newLocation);
                map.setZoom(13);
    

                const link = document.getElementById('link');
                link.setAttribute('href', `/management/${slug}`);

                // Update the displayed data
                document.getElementById("smart_category").textContent = smart_category;
                document.getElementById("lhra_category").textContent = lhra_category;


                document.getElementById("slope_name").textContent = slope_name;
                document.getElementById("RS").textContent = RS;
                document.getElementById("TS").textContent = TS;
                document.getElementById("IS").textContent = IS;
                document.getElementById("CS").textContent = CS;
                document.getElementById("location").textContent = location;
                document.getElementById("slope_type").textContent = slope_type;
                document.getElementById("lat").textContent = lat.toFixed(4);
                document.getElementById("lng").textContent = lng.toFixed(4);
                


            }
        </script>

        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB3p0lYewi613mDaZlpy_MTipe4gh47kE&callback=initMap">
        </script>
    </div>
</x-app-layout>