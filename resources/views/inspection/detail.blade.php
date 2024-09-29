<x-app-layout>
    {{--
    <x-header /> --}}
    <div class="h-screen">
        <div class="p-5 h-full">
            <x-header />
            <div
                class="flex justify-between py-2 px-3 sm:px-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
                <!-- Breadcrumb -->
                @php
                $bread = [
                ['url' => '/inspection', 'label' => 'Inspections'],
                ['url' => '/inspection/'.$slope->slug, 'label' => $slope->slope_name,'active' => true],

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

            <div class="grid grid-cols-11 gap-4">
                <div class="col-span-3">
                    <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
                        <div>
                            <h2 class="text-gray-700 text-5xl font-bold">
                                {{$slope->slope_name}}
                            </h2>
                            <p class="text-gray-500">
                                Location : {{$slope->location}}
                            </p>
                        </div>

                        <x-line />
                        <div class="mb-5">
                            <h4 class="text-lg text-gray-700 font-semibold mb-3">
                                Engineering Inspection
                            </h4>
                            <ol class="flex items-center mb-2">
                                <li class="relative w-full">
                                    <div class="flex items-center">
                                        <div
                                            class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                            <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                        </div>
                                        <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                    </div>

                                </li>
                                <li class="relative w-full">
                                    <div class="flex items-center">
                                        <div
                                            class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                            <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                        </div>

                                    </div>

                                </li>
                            </ol>

                            <div class="bg-gray-200 p-3 rounded-xl flex w-full">
                                <div class="w-full">
                                    Latest Inspection :
                                    <h2 class="font-bold text-lg">
                                        {{date('d M Y', strtotime($slope->updated_at))}}
                                    </h2>
                                </div>
                                <div class="w-full">
                                    Next Inspection :
                                    <h2 class="font-bold text-lg">
                                        {{date('d M Y', strtotime($slope->engineer_inspection))}}
                                    </h2>
                                </div>

                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg text-gray-700 font-semibold mb-3">
                                Routine Inspection
                            </h4>

                            <ol class="flex items-center mb-2">
                                <li class="relative w-full">
                                    <div class="flex items-center">
                                        <div
                                            class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                            <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                        </div>
                                        <div class="flex w-full bg-gray-200 h-0.5 dark:bg-gray-700"></div>
                                    </div>

                                </li>
                                <li class="relative w-full">
                                    <div class="flex items-center">
                                        <div
                                            class="z-10 flex items-center justify-center w-6 h-6 bg-lime-200 rounded-full ring-0 ring-white dark:bg-lime-900 sm:ring-8 dark:ring-gray-900 shrink-0">
                                            <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                        </div>

                                    </div>

                                </li>
                            </ol>
                            <div class="bg-gray-200 p-3 rounded-xl flex w-full">
                                @if($maintenance !== null)
                                <div class="w-full">
                                    Latest inspection :
                                    <h2 class="font-bold text-lg">
                                        {{date('d M Y', strtotime($maintenance->created_at))}}
                                    </h2>
                                </div>
                                <div class="w-full">
                                    Next Inspection :
                                    <h2 class="font-bold text-lg">
                                        {{date('d M Y', strtotime($slope->maintenance_inspection))}}
                                    </h2>
                                </div>
                                @else
                                Routine maintenance has never been carried out
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4 p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
                    <div class="flex flex-col justify-between h-full">
                        <div>
                            <div class="mb-5">
                                <h2 class="text-gray-700 text-2xl font-bold">
                                    Engineering Inspection
                                </h2>
                                <p class="text-gray-500">
                                    Latest Inspection : {{date('d M Y', strtotime($slope->updated_at))}}
                                </p>
                            </div>

                            <div class="flex">
                                <div class="w-full">
                                    <div class="flex mb-10">
                                        <div class="w-full px-2">
                                            <p class="text-sm">
                                                Total Score (TS) :
                                            </p>
                                            <x-line />
                                            <h2 class="text-3xl text-bold">
                                                {{round(json_decode($slope->ranking)->TS,2)}}
                                            </h2>
                                        </div>
                                        @if($slope->slope_type == 'fill-type')
                                        <div class="w-full px-2">
                                            <p class="text-sm">
                                                Instability Score<sub>1</sub> (IS)<sub>1</sub> :
                                            </p>
                                            <x-line />
                                            <h2 class="text-3xl text-bold">
                                                {{round(json_decode($slope->ranking)->IS1,2)}}
                                            </h2>
                                        </div>
                                        @else
                                        <div class="w-full px-2">
                                            <p class="text-sm">
                                                Instability Score (IS) :
                                            </p>
                                            <x-line />
                                            <h2 class="text-3xl text-bold">
                                                {{round(json_decode($slope->ranking)->IS,2)}}
                                            </h2>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="flex mb-10">
                                        @if($slope->slope_type == 'fill-type')
                                        <div class="w-full px-2">
                                            <p class="text-sm">
                                                Consequence Score<sub>1</sub> (CS)<sub>1</sub> :
                                            </p>
                                            <x-line />
                                            <h2 class="text-3xl text-bold">
                                                {{round(json_decode($slope->ranking)->CS1,2)}}
                                            </h2>
                                        </div>
                                        @else
                                        <div class="w-full px-2">
                                            <p class="text-sm">
                                                Consequence Score (CS) :
                                            </p>
                                            <x-line />
                                            <h2 class="text-3xl text-bold">
                                                {{round(json_decode($slope->ranking)->CS,2)}}
                                            </h2>
                                        </div>
                                        @endif
                                        <div class="w-full px-2">
                                            <p class="text-sm">
                                                Ranking Score (RS) :
                                            </p>
                                            <x-line />
                                            <h2 class="text-3xl text-bold">
                                                {{round(json_decode($slope->ranking)->TS*0.062,2)}}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10">
                                <x-line />
                            </div>
                            <div class="grid grid-cols-3 py-5">
                                <div>
                                    <h4 class="font-semibold">Documentation</h4>
                                    <p class="text-gray-500">Taken on : {{date('d M Y', strtotime($slope->updated_at))}}
                                    </p>
                                </div>
                                @if ($slope->img !== "[]" )
                                <div class="relative w-full col-span-2 overflow-hidden rounded-2xl"
                                    x-data="{ currentIndex: 0, interval: null }" x-init="() => {
                               interval = setInterval(() => {
                                   currentIndex = (currentIndex + 1) % 3; // 3 is the number of images
                               }, 1000);
                                }" x-on:mouseleave="interval = setInterval(() => { currentIndex = (currentIndex + 1) % 3; }, 3000)"
                                    x-on:mouseenter="clearInterval(interval)">
                                    <ul id="images" class="flex transition-transform duration-500 ease-in-out"
                                        :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
                                        @foreach (json_decode($slope->img) as $img)
                                        <li class="w-full flex-shrink-0"><img
                                                src="/storage/{{$slope->slug}}/{{$img->file}}/{{$img->img}}"
                                                alt="Picture 3" class="object-cover w-full h-60"></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @else
                                <div
                                    class="bg-gray-200 col-span-2 rounded-xl p-5 min-h-60 flex items-center justify-center text-gray-600 font-semibold">
                                    No Image
                                </div>
                                @endif
                            </div>
                        </div>

                        <x-primary-link class="w-full" href="/engineer-inspection/{{$slope->slug}}">Detail Inspection
                        </x-primary-link>
                    </div>
                </div>
                <div class="col-span-4 p-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
                    <div class="flex flex-col justify-between h-full">
                        <div>
                            <h2 class="text-gray-700 text-2xl font-bold">
                                Routine Inspection
                            </h2>
                            @if (isset($maintenance))
                            <p class="text-gray-500">
                                Latest Maintenance : -
                            </p>
                            <div class="py-5">
                                <div class="grid grid-cols-3 py-5">
                                    <div>
                                        <h4 class="font-semibold">Documentation</h4>
                                        <p class="text-gray-500">Taken on : {{$maintenance->created_at}}</p>
                                    </div>
                                    @if($maintenance->img !== '[]')
                                    <div class="col-span-2">
                                        <div class="relative w-full overflow-hidden rounded-2xl"
                                            x-data="{ currentIndex: 0, interval: null }" x-init="() => {
                                           interval = setInterval(() => {
                                               currentIndex = (currentIndex + 1) % 3; // 3 is the number of images
                                           }, 1000);
                                            }"
                                            x-on:mouseleave="interval = setInterval(() => { currentIndex = (currentIndex + 1) % 3; }, 3000)"
                                            x-on:mouseenter="clearInterval(interval)">
                                            <ul id="images2" class="flex transition-transform duration-500 ease-in-out"
                                                :style="{ transform: `translateX(-${currentIndex * 100}%)` }">

                                                @foreach (json_decode($maintenance->img) as $item)
                                                @if ($item->type !== 'file_maintenance')
                                                <li class="w-full flex-shrink-0"><img
                                                        src="/storage/{{$slope->slug}}/maintenance-{{str_replace('/','',$maintenance->date_of_maintenance)}}/{{$item->file}}/{{$item->img}}"
                                                        alt="Picture 3" class="object-cover w-full h-60"></li>
                                                @endif
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                    @else
                                    <div
                                        class="bg-gray-200 col-span-2 rounded-xl p-5 min-h-60 flex items-center justify-center text-gray-600 font-semibold">
                                        No Image
                                    </div>
                                    @endif

                                </div>
                                <x-line />
                                <div class="bg-gray-100 p-3 rounded-xl mb-5">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center">
                                            <div class="rounded-xl bg-gray-200 text-gray-600 p-5">
                                                <svg class="w-7 h-7 " aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M7 8v8a5 5 0 1 0 10 0V6.5a3.5 3.5 0 1 0-7 0V15a2 2 0 0 0 4 0V8" />
                                                </svg>
                                            </div>
                                            <div class="ml-2">
                                                <h4 class="font-bold text-lg">
                                                    Maintenance {{date('d M Y', strtotime($maintenance->created_at))}}
                                                </h4>
                                                <p>Attacted File</p>
                                            </div>
                                        </div>

                                        <div>
                                            @foreach (json_decode($maintenance->img) as $i)
                                            @if ($i->type == 'file_maintenance')
                                            <a download target="_blank"
                                                href="/storage/{{$slope->slug}}/maintenance-{{str_replace('/','',$maintenance->date_of_maintenance)}}/{{$i->file}}/{{$i->img}}">
                                                Download
                                            </a>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300 bg-gray-100 rounded-xl p-5">
                                    <h4 class="mb-2 font-bold text-gray-400">Routine Maintenance Resume :</h4>
                                    <p class="text-gray-600">
                                        {{$maintenance->resume}}
                                    </p>

                                </div>

                            </div>
                            @else
                            <div class="mt-10 bg-gray-200 rounded-lg p-5 text-center">
                                Routine maintenance has never been carried out
                            </div>
                            @endif
                        </div>

                        <x-primary-link class="w-full" href="/maintenance-routine/{{$slope->slug}}">Detail Maintenance
                        </x-primary-link>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        const gallery = new Viewer(document.getElementById('images'));
        const gallery2 = new Viewer(document.getElementById('images2'));
    </script>
</x-app-layout>