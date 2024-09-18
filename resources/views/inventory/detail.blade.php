<x-app-layout>
    <div class="p-5">
        <div
            class="flex justify-between items-center p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div>
                <!-- Breadcrumb -->
                @php
                $bread = [
                ['url' => '/inventory', 'label' => 'Slope Inventory'],
                ['url' => '/inventory/'.$slope->slug, 'label' => $slope->slope_name,'active' => true],

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
                                <a href="/pdf-inventory/{{$slope->slug}}" target="_blank"
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
                                @endif
                                @endAuth
                            </div>

                            <div id="popup-modal" tabindex="-1"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="popup-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
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
                                                <form action="/slope/{{$slope->slug}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" data-modal-hide="popup-modal" type="button"
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

                        </div>
                    </div>

                    <div>
                        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                                data-tabs-toggle="#default-styled-tab-content"
                                data-tabs-active-classes="text-lime-600 hover:text-lime-600 dark:text-lime-500 dark:hover:text-lime-500 border-lime-600 dark:border-lime-500"
                                data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                                role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                                        data-tabs-target="#styled-profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Slope Information</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button"
                                        role="tab" aria-controls="dashboard" aria-selected="false">Slope
                                        Geometry</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="settings-styled-tab" data-tabs-target="#styled-settings" type="button"
                                        role="tab" aria-controls="settings" aria-selected="false">Slope
                                        Characteristic</button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="files-styled-tab" data-tabs-target="#styled-files" type="button" role="tab"
                                        aria-controls="files" aria-selected="false">Slope Documentation</button>
                                </li>

                            </ul>
                        </div>
                        <div id="default-styled-tab-content">
                            <div class="hidden px-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile"
                                role="tabpanel" aria-labelledby="profile-tab">

                                <div class="grid grid-cols-2 ">
                                    <div class="border-b border-gray-300 py-5 font-bold">
                                        Location
                                    </div>
                                    <div class="border-b border-gray-300 py-5">
                                        {{$slope->location}}
                                    </div>
                                    <div class="border-b border-gray-300 py-5 font-bold">
                                        Slope Type
                                    </div>
                                    <div class="border-b border-gray-300 py-5">
                                        {{$slope->slope_type}}
                                    </div>
                                    <div class="border-b border-gray-300 py-5 font-bold">
                                        Side of Road
                                    </div>
                                    <div class="border-b border-gray-300 py-5">
                                        {{$slope->side_of_road}}
                                    </div>
                                    <div class="border-b border-gray-300 py-5 font-bold">
                                        KM :
                                    </div>
                                    <div class="border-b border-gray-300 py-5">
                                        {{$slope->sta1}} |
                                        {{$slope->sta1}}
                                    </div>
                                    <div class="py-5  font-bold">
                                        Coordinate :
                                    </div>
                                    <div class="py-5">
                                        {{$slope->gps1}} |
                                        {{$slope->gps2}}
                                    </div>
                                </div>
                            </div>
                            @if ($slope->slope_type === 'cut-type')
                            @include('inventory.partials.detail_cut')
                            @elseif ($slope->slope_type === 'rock-type')
                            @include('inventory.partials.detail_rock')
                            @elseif ($slope->slope_type === 'fill-type')
                            @include('inventory.partials.detail_fill')
                            @elseif ($slope->slope_type === 'retaining-type')
                            @include('inventory.partials.detail_retaining')
                            @elseif ($slope->slope_type === 'combine-type')
                            @include('inventory.partials.detail_combine')
                            @endif

                        </div>
                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-files" role="tabpanel"
                            aria-labelledby="files-tab">
                            <div class="grid sm:grid-cols-2 gap-2">

                                <div class="">
                                    <h4 class="font-bold mb-2 text-gray-800">Slope Documentation</h4>
                                </div>
                                <form action="/upload-doc/{{$slope->slug}}" enctype="multipart/form-data" method="POST">
                                    <div>
                                        @csrf
                                        <x-file-upload name="doc" title="Upload Slope Document" required="true"
                                            maxFileSize="10MB" type="document" notes="
                                        Input your slope document and click upload to save the file 
                                    " />
                                    </div>
                                    <div class="flex justify-end">
                                        <x-primary-button>Upload</x-primary-button>
                                    </div>
                                </form>

                            </div>
                            <x-line />
                            <h4 class="font-bold mb-3">Documentation</h4>

                            @foreach ($document as $doc)

                            <div
                                class="flex justify-between items-center mb-2 bg-gray-100 border border-gray-300 px-2 py-1 rounded-lg hover:bg-gray-200 cursor-pointer hover:underline">
                                <p class="text-gray-700 font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                            d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                                    </svg>
                                    {{$doc->original_name}}
                                </p>
                                <div class="flex items-center">
                                    <a href="/storage/{{$slope->slug}}/files/{{$doc->direction}}/{{$doc->file_name}}"
                                        download class="hover:text-lime-600 mr-3" target="_blank">
                                        Download
                                    </a>
                                    <button type="button" data-modal-target="popup-{{$doc->id}}"
                                        data-modal-toggle="popup-{{$doc->id}}"
                                        class="p-1 text-red-600 hover:text-red-700 hover:bg-gray-300 rounded-full"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                        </svg>
                                    </button>
                                </div>

                            </div>

                            <div id="popup-{{$doc->id}}" tabindex="-1"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button"
                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="popup-{{$doc->id}}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
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
                                                Are you sure you want to delete this document?</h3>

                                            <form action="/delete-doc/{{$doc->id}}" method="POST"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center text-center">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-5 py-2.5">
                                                    Delete
                                                </button>
                                            </form>

                                            <button data-modal-hide="popup-{{$doc->id}}" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

            <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js">
            </script>
            <script
                src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
            </script>
            <script
                src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
            </script>
            <script
                src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js">
            </script>
            <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

            <script>
                // get a collection of elements with class filepond
                const inputElements = document.querySelectorAll('input.filestyle');

                // loop over input elements
                Array.from(inputElements).forEach(inputElement => {
                FilePond.registerPlugin(FilePondPluginImagePreview,FilePondPluginFileValidateSize,FilePondPluginImageExifOrientation,FilePondPluginFileValidateType);
                FilePond.create(inputElement);
                FilePond.setOptions({
                        fileValidateTypeLabelExpectedTypes: 'Expects {allButLastType} or {lastType}',
                        server: {
                            process: '/temp-upload',
                            revert: '/temp-delete',
                            headers: {
                                'X-CSRF-TOKEN': '{{csrf_token()}}'
                            },
                        },
                    });
                })
            </script>
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