<x-form-layout>
    <div class="p-5">
        <div
            class="flex justify-between items-center p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div>
                <!-- Breadcrumb -->
                @php
                $bread = [
                ['url' => '/maintenance-routine/'.$slope->slug, 'label' => 'Routine Maintenance'],
                ['url' => '', 'label' => 'Create - '.$slope->slope_name,'active' => true],

                ];
                @endphp
                <x-bread :items="$bread" />

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


        @if ($errors->any())
        <div class="mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="max-w-7xl mx-auto lg:px-8 space-y-6">
            <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl" x-data="formHandler()">
                <form action="" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="slug" value="{{$slope->slug}}">

                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-xl">
                            FEATURE NO : {{$slope->slope_name}}
                        </h2>
                        <x-primary-button>Upload</x-primary-button>
                    </div>
                    <x-line />

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <div class="mb-4">
                                <label for="date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of
                                    Maintenance</label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input type="text" required autocomplete="off" datepicker datepicker-buttons
                                        name="date_of_maintenance" datepicker-format="dd/mm/yyyy" id="date"
                                        datepicker-autoselect-today autocomplete="false"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                        placeholder="Select date">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="weather_condition"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weather
                                    Condition</label>
                                <input type="text" name="weather_condition" id="weather_condition" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            </div>
                        </div>

                        <div class="border border-gray-300 rounded-lg p-3 mb-2">
                            <h2 class="font-bold text-lg mb-2">Routine Maintenance Template</h2>
                            <input type="file" name="file_maintenance" class="filestyle" data-max-file-size="50MB" />
                            <div class="">
                                <p>Upload Downloaded File Template</p>
                            </div>
                        </div>
                    </div>
                    <x-line />

                    <div class="mb-2 mt-3">
                        <label class="font-bold text-lg mb-5">Typical Routine Maintenance Works for Slope</label>
                    </div>
                    <div class="mb-5">

                        @if ($slope->slope_type == 'cut-type' || $slope->slope_type == 'fill-type')
                        <div class="relative overflow-x-auto rounded-xl border border-gray-300">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-gray-700 uppercase bg-gray-50 border-b border-gray-300 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Type of Inspection</th>
                                        <th scope="col" class="px-6 py-3">Item Maintenance</th>
                                        <th scope="col" class="px-6 py-3">Typical Maintenance Works Required</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                            rowspan="4">Surface Inspection</td>
                                        <td class="px-6 py-2" rowspan="4">Vegetated Surface Cover</td>
                                        <td class="px-6 py-2">
                                            <ul class="list-disc pl-5">
                                                <li>Trim vegetation if overgrown.</li>
                                                <li>Replant vegetation in areas where the vegetated surfacing has died.
                                                </li>
                                                <li>Remove dead, decaying or unstable trees.</li>
                                                <li>Regrade eroded areas with compacted soil followed by re-planting.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"></tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"></tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"></tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                            rowspan="2">Drainage Inspection</td>
                                        <td class="px-6 py-2">Surface Drainage Channels</td>
                                        <td class="px-6 py-2">
                                            <ul class="list-disc pl-5">
                                                <li>Clear debris, undesirable vegetation and other obstructions.</li>
                                                <li>Repair minor cracks and rebuild severely cracked channels on
                                                    drainage.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2">Weepholes and Drainage Pipes</td>
                                        <td class="px-6 py-2">
                                            <ul class="list-disc pl-5">
                                                <li>Clear obstructions (e.g., weeds and debris) in weepholes and pipe
                                                    ends.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                            rowspan="3">Instability Inspection</td>
                                        <td class="px-6 py-2">Seepage</td>
                                        <td class="px-6 py-2">
                                            <ul class="list-disc pl-5">
                                                <li>Identification of seepage.</li>
                                                <li>Drain the seepage with vertical and horizontal drains.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-2">Cracking and Deformation</td>
                                        <td class="px-6 py-2">
                                            <ul class="list-disc pl-5">
                                                <li>Record and monitor cracks on slopes and slope reinforcement
                                                    surfaces.</li>
                                                <li>Record and monitor signs of deformation on the slope.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <td class="px-6 py-2">Rainfall</td>
                                        <td class="px-6 py-2">
                                            <ul class="list-disc pl-5">
                                                <li>Record the rainfall.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        @if ($slope->slope_type == 'rock-type')
                        <div class="relative overflow-x-auto rounded-xl border border-gray-300">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Type of Inspection</th>
                                        <th scope="col" class="px-6 py-3">Item Maintenance</th>
                                        <th scope="col" class="px-6 py-3">Typical Maintenance Works Required</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                            rowspan="4">Surface Inspection</td>
                                        <td class="px-6 py-4" rowspan="4">Vegetated Surface Cover</td>
                                        <td class="px-6 py-4">
                                            <ul class="list-disc pl-5">
                                                <li>Trim vegetation if overgrown.</li>
                                                <li>Replant vegetation in areas where the vegetated surfacing has died.
                                                </li>
                                                <li>Remove dead, decaying or unstable trees.</li>
                                                <li>Regrade eroded areas with compacted soil followed by re-planting.
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"></tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"></tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"></tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                            rowspan="2">Drainage Inspection</td>
                                        <td class="px-6 py-4">Surface Drainage Channels</td>
                                        <td class="px-6 py-4">
                                            <ul class="list-disc pl-5">
                                                <li>Clear debris, undesirable vegetation and other obstructions.</li>
                                                <li>Repair minor cracks and rebuild severely cracked channels on
                                                    drainage.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">Weepholes and Drainage Pipes</td>
                                        <td class="px-6 py-4">
                                            <ul class="list-disc pl-5">
                                                <li>Clear obstructions (e.g., weeds and debris) in weepholes and pipe
                                                    ends.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                            rowspan="3">Instability Inspection</td>
                                        <td class="px-6 py-4">Seepage</td>
                                        <td class="px-6 py-4">
                                            <ul class="list-disc pl-5">
                                                <li>Identification of seepage.</li>
                                                <li>Drain the seepage with vertical and horizontal drains.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">Cracking and Deformation</td>
                                        <td class="px-6 py-4">
                                            <ul class="list-disc pl-5">
                                                <li>Record and monitor cracks on slopes and slope reinforcement
                                                    surfaces.</li>
                                                <li>Record and monitor signs of deformation on the slope.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4">Rainfall</td>
                                        <td class="px-6 py-4">
                                            <ul class="list-disc pl-5">
                                                <li>Record the rainfall.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Geological Inspection</td>
                                        <td class="px-6 py-4">Rock Slope and Boulders</td>
                                        <td class="px-6 py-4">
                                            <ul class="list-disc pl-5">
                                                <li>Removal of loose rock debris and undesirable vegetation from rock
                                                    slopes or around boulders.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        @if ($slope->slope_type == 'retaining-type')
                        <div class="relative overflow-x-auto rounded-xl border border-gray-300">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Type of Inspection</th>
                                        <th scope="col" class="px-6 py-3">Item Maintenance</th>
                                        <th scope="col" class="px-6 py-3">Typical Maintenance Works Required</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Surface Inspection</td>
                                        <td class="px-6 py-4">Impermeable Surface Cover</td>
                                        <td class="px-6 py-4">
                                            - Remove undesirable vegetation growth.<br>
                                            - Remove dead, decaying or unstable trees.<br>
                                            - Repair cracks or spalling.<br>
                                            - Regrade and repair eroded areas.<br>
                                            - Replace surface cover that has separated from underlying soil.
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Drainage Inspection</td>
                                        <td class="px-6 py-4">Surface Drainage Channels</td>
                                        <td class="px-6 py-4">
                                            - Clear debris, undesirable vegetation and other obstructions<br>
                                            - Repair minor cracks and Rebuild severely cracked channels on drainage
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        </td>
                                        <td class="px-6 py-4">Weepholes and Drainage Pipes</td>
                                        <td class="px-6 py-4">
                                            - Clear obstructions (e.g. weeds and debris) in weepholes and pipe ends.
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Instability Inspection</td>
                                        <td class="px-6 py-4">Seepage</td>
                                        <td class="px-6 py-4">
                                            - Identification of seepage<br>
                                            - Drain the seepage with vertical and horizontal drains
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        </td>
                                        <td class="px-6 py-4">Cracking and Deformation</td>
                                        <td class="px-6 py-4">
                                            - Record and monitor cracks on slopes and slope reinforcement surfaces<br>
                                            - Record and monitor signs of deformation on the slope
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        </td>
                                        <td class="px-6 py-4">Rainfall</td>
                                        <td class="px-6 py-4">
                                            - Record the rainfall
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <td
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            Geological Inspection</td>
                                        <td class="px-6 py-4">Rock Slope and Boulders</td>
                                        <td class="px-6 py-4">
                                            - Removal of loose rock debris and undesirable vegetation from rock slopes
                                            or around boulders.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        {{-- TABLE COMBINATION --}}
                        @if ($slope->slope_type == 'combine-type')
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Type of Inspection</th>
                                    <th scope="col" class="px-6 py-3">Item Maintenance</th>
                                    <th scope="col" class="px-6 py-3">Typical Maintenance Works Required
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b">
                                    <td rowspan="2" class="px-6 py-4 font-medium text-gray-900">Surface
                                        Inspection</td>
                                    <td class="px-6 py-4">Vegetated Surface Cover</td>
                                    <td class="px-6 py-4">
                                        - Trim vegetation if overgrown.<br>
                                        - Replant vegetation in areas where the vegetated surfacing has
                                        died.<br>
                                        - Remove dead, decaying or unstable trees.<br>
                                        - Regrade eroded areas with compacted soil followed by re-planting.
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">Impermeable Surface Cover</td>
                                    <td class="px-6 py-4">
                                        - Remove undesirable vegetation growth.<br>
                                        - Remove dead, decaying or unstable trees.<br>
                                        - Repair cracks or spalling.<br>
                                        - Regrade and repair eroded areas.<br>
                                        - Replace surface cover that has separated from underlying soil.
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td rowspan="2" class="px-6 py-4 font-medium text-gray-900">Drainage
                                        Inspection</td>
                                    <td class="px-6 py-4">Surface Drainage Channels</td>
                                    <td class="px-6 py-4">
                                        - Clear debris, undesirable vegetation and other obstructions.<br>
                                        - Repair minor cracks and rebuild severely cracked channels on
                                        drainage.
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">Weepholes and Drainage Pipes</td>
                                    <td class="px-6 py-4">
                                        - Clear obstructions (e.g., weeds and debris) in weepholes and pipe
                                        ends.
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td rowspan="3" class="px-6 py-4 font-medium text-gray-900">Instability
                                        Inspection</td>
                                    <td class="px-6 py-4">Seepage</td>
                                    <td class="px-6 py-4">
                                        - Identification of seepage.<br>
                                        - Drain the seepage with vertical and horizontal drains.
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">Cracking and Deformation</td>
                                    <td class="px-6 py-4">
                                        - Record and monitor cracks on slopes and slope reinforcement
                                        surfaces.<br>
                                        - Record and monitor signs of deformation on the slope.
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">Rainfall</td>
                                    <td class="px-6 py-4">
                                        - Record the rainfall.
                                    </td>
                                </tr>
                                <tr class="bg-white">
                                    <td class="px-6 py-4 font-medium text-gray-900">Geological Inspection
                                    </td>
                                    <td class="px-6 py-4">Rock Slope and Boulders</td>
                                    <td class="px-6 py-4">
                                        - Removal of loose rock debris and undesirable vegetation from rock
                                        slopes or around boulders.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                    </div>

                    <div class="border border-gray-300 rounded-lg p-3 mb-2">
                        <h2 class="font-bold text-lg mb-2">Routine Maintenance Documentation</h2>
                        <input type="file" multiple name="img_maintenance" class="filestyle" data-max-files="5"
                            data-max-file-size="100MB" />
                        <div class="">
                            <p>Upload Documentation with Maximum :5 Image</p>
                        </div>
                    </div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Routine
                        Maintenance Resume </label>
                    <textarea id="message" rows="7" name="resume"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                        placeholder="Write your resume.."></textarea>

                </form>
            </div>
        </div>
    </div>
</x-form-layout>