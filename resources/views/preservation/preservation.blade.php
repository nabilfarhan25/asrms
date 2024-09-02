<x-app-layout>
    <div class="p-5">
        <div
            class="flex justify-between items-center p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div>
                <!-- Breadcrumb -->
                @php
                $bread = [
                ['url' => '/preservation', 'label' => 'Preservation'],
                ['url' => '/preservation/'.$slope->slug, 'label' => $slope->slope_name],
                ['url' => '/preservation/'.$slope->slug, 'label' => $preservation->created_at,'active' => true],
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
            <div class="col-span-2 ">
                <div class="p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">

                    <div class="mb-6 flex justify-between">
                        <div>
                            <h1 class="font-bold text-5xl mb-2">
                                {{$slope->slope_name}}
                            </h1>
                            <p class="text-gray-600">
                                {{$slope->location}}
                            </p>
                        </div>
                        <div>
                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                @auth
                                <a href=""
                                    class="inline-flex items-center px-4 py-2 font-medium text-gray-900 bg-white border border-gray-200 {{Auth::user()->role !== 'admin' ? 'rounded-full' : 'rounded-s-full'}} hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-2 focus:ring-lime-700 focus:text-lime-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-lime-500 dark:focus:text-white">
                                    <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 17v-5h1.5a1.5 1.5 0 1 1 0 3H5m12 2v-5h2m-2 3h2M5 10V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v6M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1M10 3v4a1 1 0 0 1-1 1H5m6 4v5h1.375A1.627 1.627 0 0 0 14 15.375v-1.75A1.627 1.627 0 0 0 12.375 12H11Z" />
                                    </svg>
                                    Export PDF
                                </a>

                                @if (Auth::user()->role === 'admin')

                                <a href="/edit/geometry/{{$slope->slug}}"
                                    class="inline-flex items-center px-4 py-2 font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-yellow-300 focus:z-10 focus:ring-2 focus:ring-yellow-300 focus:text-yellow-300 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-yellow-300 dark:focus:text-white">
                                    <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                                    </svg>
                                    Edit
                                </a>
                                <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    class="inline-flex items-center px-4 py-2 font-medium text-gray-900 bg-white border border-gray-200 rounded-e-full hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-red-700 focus:text-red-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-red-500 dark:focus:text-white">
                                    <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                    </svg>
                                    Delete
                                </button>

                                <div id="popup-modal" tabindex="-1"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="popup-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                    Are you sure you want to delete {{$slope->slope_name}}?</h3>
                                                <div class="flex justify-center">
                                                    <form action="/preservation/{{$preservation->id}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" data-modal-hide="popup-modal"
                                                            type="button"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                            Yes, I'm sure
                                                        </button>
                                                    </form>
                                                    <button data-modal-hide="popup-modal" type="button"
                                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                        cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endAuth

                            </div>
                        </div>
                    </div>

                    <div>

                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <div class="mb-5">
                                    <label for="date_of_landslide"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of
                                        Landslide</label>
                                    <input type="text" id="date_of_landslide" name="date_of_landslide"
                                        value="{{$preservation->date_of_landslide}}" disabled
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="landslide_type"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Landslide
                                        Type</label>
                                    <select name="landslide_type" required disabled
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                        id="landslide_type">
                                        <option value="" hidden>{{$preservation->landslide_type}}</option>
                                        <option>Flow Landslide</option>
                                        <option>Rock Fall</option>
                                        <option>Translation Slide</option>
                                        <option>Rotational Slide</option>

                                    </select>

                                </div>

                                <div class="mb-5">
                                    <label for="type_of_improvement_works"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of
                                        Improvement Works</label>
                                    <select name="type_of_improvement_works" required disabled
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                        id="type_of_improvement_works">
                                        <option value="" hidden>{{$preservation->type_of_improvement_works}}</option>
                                        <option>Preventive maintenance works</option>
                                        <option>Upgrading works</option>
                                        <option>Repair works to landslides</option>
                                    </select>

                                </div>
                            </div>

                            <div>
                                <div class="mb-5">
                                    <h3
                                        class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                        Download Form
                                    </h3>

                                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to
                                        over
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus quam
                                        commodi
                                        sed
                                        aut eaque qui recusandae possimus! Nam autem praesentium .</p>
                                    <a href="/storage/{{$slope->slug}}/preservation-{{explode(' ', $preservation->created_at)[0]}}/{{json_decode($preservation->file, true)[0]['file']}}/{{json_decode($preservation->file, true)[0]['img']}}"
                                        target="_blank" download
                                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-lime-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                                            class="w-3.5 h-3.5 me-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                            <path
                                                d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                        </svg> Download</a>
                                </div>

                            </div>

                        </div>
                        <x-line />

                        <label for="message" class="block mb-2 font-medium text-gray-900 dark:text-white">
                            Slope Preservation Resume </label>
                        <textarea id="message" rows="7" name="note"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                            placeholder="Write your resume.." disabled>{{$preservation->note}}</textarea>

                    </div>

                </div>
            </div>

            <div>
                <div class="bg-white border border-gray-200 p-3 rounded-2xl mb-5">
                    <div class="h-72 shadow-sm rounded-xl" id="map"></div>
                </div>

                <div class="bg-white border border-gray-200 p-5 rounded-2xl">
                    <h2 class="mb-3 font-bold text-xl">
                        Documentation
                    </h2>

                    <div class="grid gap-3 grid-cols-3">
                        @foreach (json_decode($preservation->file) as $i)
                        @if ($i->type == 'file_preservation')
                        <img src="/storage/{{$slope->slug}}/preservation-{{ \Carbon\Carbon::parse($i->created_at)->format('Y-m-d') }}/{{$i->file}}/{{$i->img}}"
                            class="w-full rounded-lg h-44 object-cover" alt="">
                        @endif
                        @endforeach
                    </div>

                </div>
            </div>

            <script>
                // Define the coordinates for the center of the map
                var lat = parseInt({{str_replace('°','',$slope->latitude)}}); // Example latitude
                var lon = parseInt({{str_replace('°','',$slope->longtitude)}}); // Example longitude
                
                // Create the map and set its view to the chosen coordinates and zoom level
                var map = L.map('map').setView([lat, lon], 11);

                // Add a tile layer to the map (OpenStreetMap tiles in this case)
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 20,
                }).addTo(map);

                // Optionally, add a marker at the center point
                L.marker([lat, lon]).addTo(map)
                    .bindPopup('<b>{{$slope->slope_name}}</b><br> {{$slope->location}}')
                    .openPopup();

                const gallery = new Viewer(document.getElementById('images'));
            </script>
        </div>
    </div>
</x-app-layout>