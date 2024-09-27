<x-app-layout>
    <div class="p-5">
        <div
            class="flex justify-between items-center p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div>
                <!-- Breadcrumb -->
                @php
                $bread = [
                ['url' => '/mitigation', 'label' => 'Mitigations'],
                ['url' => '/mitigation/'.$slope->slug, 'label' => $slope->slope_name,'active' => true],

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

                    </div>


                    <div class="my-2 flex justify-end">
                        <x-primary-link href="/create/mitigation/{{$slope->slug}}">
                            Add Mitigation
                        </x-primary-link>
                    </div>
                    <div>
                        <div>

                            @foreach ($mitigations as $mitigation)
                            <a href="/mitigation/{{$mitigation->slug}}/{{$mitigation->id}}">
                                <div
                                    class="flex px-5 py-3 mb-4 rounded-lg bg-gray-50 border border-gray-200 hover:bg-gray-100 hover:border-lime-600">
                                    <div class="w-full border-r border-gray-300">
                                        <div class="text-lg font-bold">Mitigation on:</div>
                                        <p class="text-sm text-gray-500">
                                            Updated at: {{$slope->updated_at}}
                                        </p>
                                    </div>
                                    <div class="w-full px-5 border-r border-gray-300">
                                        <p class="text-sm text-gray-500">
                                            Location :
                                        </p>
                                        <div class=" font-semibold">{{$slope->location}}</div>
                                    </div>
                                    <div class="w-full flex justify-between items-center px-5 text-center">
                                        <p class="text-sm text-gray-500">
                                            PIC :
                                        </p>
                                        <div class="font-semibold">{{$mitigation->author}}</div>
                                    </div>
                                </div>
                            </a>
                            @endforeach

                        </div>

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
                    @php
                    $ref = [
                    'plan' => 'PLAN SECTION',
                    'cross'=>'CROSS SECTION',
                    'img_slope_protection' => 'SLOPE PROTECTION',
                    'img_surface_drainage_provision' => 'SURFACE DRAINAGE PROVISION',
                    'img_hydrogeological_settings' => 'HYDROGEOLOGICAL SETTINGS',
                    'img_geological_features' => 'GEOLOGICAL FEATURES',
                    'img_signs_of_distress' => 'SIGNS OF DISTRESS',
                    'img_instability_after' => 'INSTABILITY',
                    ];
                    @endphp

                    <div id="accordion-collapse" data-accordion="collapse">

                        @foreach ($ref as $r => $val)
                        @php
                        $count = 0;
                        @endphp
                        <h2 id="{{$r}}">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                data-accordion-target="#n-{{$r}}" aria-expanded="false" aria-controls="n-{{$r}}">
                                <span>{{ucwords(str_replace("_", " ", $val))}}</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="n-{{$r}}" class="hidden" aria-labelledby="{{$r}}">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 ">
                                <ul id="p-{{$r}}" class="grid grid-cols-3 gap-2">
                                    @foreach ($img as $i)
                                    @if ($i->type == $r)
                                    @php
                                    $count++
                                    @endphp
                                    <li>
                                        <img id="p-{{$r}}" src="/storage/{{$slope->slug}}/{{$i->file}}/{{$i->img}}"
                                            class="w-full rounded-lg h-44 object-cover" alt="">
                                    </li>

                                    @endif
                                    @endforeach

                                    @if ($count == 0)
                                    <div class="col-span-3 rounded-lg bg-gray-200 text-gray-400 text-center p-5">
                                        There's No Documentation
                                    </div>
                                    @endif

                                </ul>
                                <script>
                                    const {{$r}} = new Viewer(document.getElementById('p-{{$r}}'));
                                </script>
                            </div>
                        </div>

                        @endforeach
                    </div>

                    {{-- @foreach ($img as $i)
                    @if ($i->type=='plan')
                    <img src="/storage/{{$slope->slug}}/{{$i->file}}/{{$i->img}}" class="w-24" alt="">
                    @endif
                    @endforeach --}}

                </div>
            </div>

            <script>
                function initMap() {
                    var location = { lat: {{str_replace('°','',$slope->latitude)}}, lng: {{str_replace('°','',$slope->longtitude)}} }; // Contoh Jakarta

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 12,
                        center: location 
                    });
    
                    var marker = new google.maps.Marker({
                        position: location,
                        map: map
                    });
                }
            </script>

            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB3p0lYewi613mDaZlpy_MTipe4gh47kE&callback=initMap">
            </script>
        </div>
    </div>
</x-app-layout>