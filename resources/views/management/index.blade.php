<x-app-layout>

    <div class="p-5">
        <div class="flex justify-between p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
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
            <div class="col-span-2 ">
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
                    </div>

                    @foreach ($slopes as $slope)
                    <button class="getDataBtn w-full text-left mb-4" data-slug="{{$slope->slug}}">
                        <div class="flex px-5 py-3 rounded-lg  border border-gray-200  hover:border-lime-600">
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

                            <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                                <p class="text-sm my-auto text-gray-500">Side of Road : <span
                                        class="font-semibold text-gray-800">{{$slope->side_of_road}}</span>
                                </p>
                            </div>
                            <div class="w-full sm:flex hidden items-center justify-center border-r border-gray-300">
                                <p class="text-sm my-auto text-gray-500">Ranking Score : <span
                                        class="font-semibold text-gray-800">{{round(json_decode($slope->ranking)->TS*0.062,2)}}</span>
                                </p>
                            </div>
                            <div class="w-full sm:flex hidden items-center justify-center">
                                <p class="text-sm my-auto text-gray-500">Slope Type : <span
                                        class="text-base font-semibold border-2 border-gray-300 px-3 rounded-full text-gray-800">
                                        {{$slope->slope_type}}</span>
                                </p>

                            </div>

                        </div>
                    </button>
                    @endforeach
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
                            {{$selectedSlope->slope_name}}</h2>
                    </div>
                    <div class="h-72 shadow-sm rounded-xl" id="map"></div>
                    <div class="flex my-5">
                        <div class="w-1/3">
                            <p class="text-sm">
                                Ranking Score (RS) :
                            </p>
                            <x-line />
                            <div id="ranking">
                                <h2 class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-4xl">
                                    {{ round(json_decode($selectedSlope->ranking)->TS*0.062,2)}}</h2>
                            </div>

                        </div>
                        <div class="w-2/3">
                            <div class="flex mb-10">
                                <div class="w-full px-2">
                                    <p class="text-sm">
                                        Total Score (TS) :
                                    </p>
                                    <x-line />
                                    <div id="ts">
                                        <h2
                                            class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">
                                            {{round(json_decode($selectedSlope->ranking)->TS,2)}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="w-full px-2">
                                    <p class="text-sm">
                                        Instability Score (IS) :
                                    </p>
                                    <x-line />
                                    <div id="is">
                                        <h2
                                            class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">
                                            @if ($selectedSlope->slope_type == "fill-type")
                                            {{round(json_decode($selectedSlope->ranking)->IS1,2)}}
                                            @else
                                            {{round(json_decode($selectedSlope->ranking)->IS,2)}}
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-full px-2">
                                    <p class="text-sm">
                                        Consequence Score (CS) :
                                    </p>
                                    <x-line />
                                    <div id="cs">
                                        <h2
                                            class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">
                                            @if ($selectedSlope->slope_type == "fill-type")
                                            {{round(json_decode($selectedSlope->ranking)->CS1,2)}}
                                            @else
                                            {{round(json_decode($selectedSlope->ranking)->CS,2)}}
                                            @endif
                                        </h2>
                                    </div>
                                </div>
                                <div class="w-full px-2">
                                    <p class="text-sm">
                                        Ranking Score (RS) :
                                    </p>
                                    <x-line />
                                    <div id="rs">
                                        <h2
                                            class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">
                                            {{round(json_decode($selectedSlope->ranking)->TS*0.062,2)}}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <x-line />
                    <div class="relative overflow-x-auto">

                        <table class="mb-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Location
                                    </th>
                                    <td class="px-6 py-4">
                                        <div id="location">
                                            <p
                                                class="animate-fade-left animate-once animate-duration-200 animate-ease-in">
                                                {{$selectedSlope->location}}</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Slope Type
                                    </th>
                                    <td class="px-6 py-4">
                                        <div id="type">
                                            <p
                                                class="animate-fade-left animate-once animate-duration-200 animate-ease-in">
                                                {{$selectedSlope->slope_type}}</p>
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
    </div>

    <script>
        // Define the coordinates for the center of the map
        var lat = parseInt({{str_replace('°','',$selectedSlope->latitude)}}); // Example latitude
        var lon = parseInt({{str_replace('°','',$selectedSlope->longtitude)}}); // Example longitude

        $(document).ready(function() {
            $('.getDataBtn').on('click', function() {
                var slug = $(this).data('slug');
                var row = $(this).children();
                $.ajax({
                    url: '/find',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        slug: slug
                    },
                    success: function(response) {
                        $('#ranking').html('<h2 class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-4xl">' + parseFloat(JSON.parse(response.ranking).TS*0.062).toFixed(2)  + '</h2>');
                        $('#ts').html('<h2 class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">' + parseFloat(JSON.parse(response.ranking).TS).toFixed(2)  + '</h2>');
                        $('#is').html('<h2 class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">' + parseFloat(JSON.parse(response.ranking).IS).toFixed(2)  + '</h2>');
                        $('#cs').html('<h2 class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">' + parseFloat(JSON.parse(response.ranking).CS).toFixed(2)  + '</h2>');
                        $('#rs').html('<h2 class="animate-fade-up animate-once animate-duration-200 animate-ease-in text-3xl">' + parseFloat(JSON.parse(response.ranking).TS*0.062).toFixed(2)  + '</h2>');

                        $('#title').html('<h2 class="animate-fade-up animate-once animate-duration-200 animate-ease-in font-bold mb-3 text-2xl">' + response.slope_name + '</h2>');
                        $('#location').html('<p class="animate-fade-up animate-once animate-duration-200 animate-ease-in">' + response.location + '</p>');
                        $('#type').html('<p class="animate-fade-up animate-once animate-duration-200 animate-ease-in">' + response.slope_type + '</p>');

                        // $('#link').html('<a href="/management/'.response.slug .'">Detail</a>');
                        $('#link').attr('href', '/management/'+ response.slug);
                        
                        $('.getDataBtn div').removeClass('bg-gray-200');
                        row.addClass('bg-gray-200');

                        lat = parseInt(response.latitude);
                        lon = parseInt(response.longtitude);

                    },
                    error: function(xhr) {
                        $('#result').html('<p>Error: ' + xhr.responseText + '</p>');
                    }
                });
            });
        });
    </script>

    <script>
        // Create the map and set its view to the chosen coordinates and zoom level
        var map = L.map('map').setView([lat, lon], 13);

        // Add a tile layer to the map (OpenStreetMap tiles in this case)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        // Optionally, add a marker at the center point
        L.marker([lat, lon]).addTo(map)
            .bindPopup('<b>{{$selectedSlope->slope_name}}</b><br> {{$selectedSlope->location}}')
            .openPopup();

        const gallery = new Viewer(document.getElementById('images'));
    </script>
</x-app-layout>