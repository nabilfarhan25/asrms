<x-app-layout>
    <div class="p-5">
        <x-header />
        <div class="flex justify-between py-2 px-3 sm:px-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <!-- Breadcrumb -->
            @php
            $bread = [
            ['url' => '/mitigation', 'label' => 'Mitigation'],
            ['url' => '', 'label' => 'Create - '.$slope->slope_name,'active' => true],

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


        <div class="max-w-7xl mx-auto lg:px-8 space-y-6">
            <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl" x-data="formHandler()">
                <form action="" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="slug" value="{{$slope->slug}}">

                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-xl">
                            MITIGATION FEATURE NO : {{$slope->slope_name}}
                        </h2>
                        <x-primary-button type="submit">Next</x-primary-button>
                    </div>
                    <x-line />

                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-bold">Slope Condition</h4>

                        </div>
                        <div>
                            <textarea id="message" rows="4" required name="slope_condition"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                placeholder="Discribe slope current condition here..."></textarea>
                        </div>
                    </div>
                    <x-line />
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <h4 class="font-bold">Mitigation Strategy</h4>

                        </div>
                        <div>
                            <textarea id="message" rows="4" required name="mitigation_strategy"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                placeholder="Discribe here..."></textarea>
                        </div>
                    </div>
                    <x-line />
                    <div>
                        <h4 class="font-bold mb-3">Mitigation Estimate</h4>
                    </div>

                    <table class="bg-slate-50 border border-gray-300 w-full">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Work Item
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Volume
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Unit
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Unit Price
                                </th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Total Price
                                </th>
                            </tr>
                        </thead>
                        <tbody x-data="{ grandTotal: 0 }">
                            <tr>
                                <th colspan="5" class="text-left p-2 bg-gray-100">
                                    Routine Maintenance
                                </th>
                            </tr>

                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Grass and Plant Cleaning Work</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="routine_maintenance1_volume"
                                        name="routine_maintenance1_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="routine_maintenance1_price"
                                        name="routine_maintenance1_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="routine_maintenance1_total"
                                        name="routine_maintenance1_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>

                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Brush Cleaning Work</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="routine_maintenance2_volume"
                                        name="routine_maintenance2_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="routine_maintenance2_price"
                                        name="routine_maintenance2_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="routine_maintenance2_total"
                                        name="routine_maintenance2_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>

                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                $watch('volume + price', value => {
                                    total = parseFloat(volume) * parseFloat(price);
                                    grandTotal += total;
                                })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Drainage Cleaning Work</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="routine_maintenance3_volume"
                                        name="routine_maintenance3_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="routine_maintenance3_price"
                                        name="routine_maintenance3_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="routine_maintenance3_total"
                                        name="routine_maintenance3_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr>
                                <th colspan="5" class="text-left p-2 bg-gray-100">
                                    Drainage Improvement
                                </th>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Drainage Repair Work</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement1_volume"
                                        name="drainage_improvement1_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement1_price"
                                        name="drainage_improvement1_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement1_total"
                                        name="drainage_improvement1_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>

                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Perimeter Drainage Channel Installation
                                    Work Type U DS I</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement2_volume"
                                        name="drainage_improvement2_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement2_price"
                                        name="drainage_improvement2_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement2_total"
                                        name="drainage_improvement2_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>

                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Drainage Channel Installation Work Type U
                                    DS 8</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement3_volume"
                                        name="drainage_improvement3_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement3_price"
                                        name="drainage_improvement3_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement3_total"
                                        name="drainage_improvement3_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Subdrainage Installation Work</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement4_volume"
                                        name="drainage_improvement4_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement4_price"
                                        name="drainage_improvement4_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="drainage_improvement4_total"
                                        name="drainage_improvement4_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>

                            </tr>

                            <tr>
                                <th colspan="5" class="text-left p-2 bg-gray-100">
                                    Stability Improvement
                                </th>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Vegetation Planting Work (Revegetation)
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement1_volume"
                                        name="stability_improvement1_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement1_price"
                                        name="stability_improvement1_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement1_total"
                                        name="stability_improvement1_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Regrading/Reslooping Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement2_volume"
                                        name="stability_improvement2_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement2_price"
                                        name="stability_improvement2_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement2_total"
                                        name="stability_improvement2_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Reslooping Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement3_volume"
                                        name="stability_improvement3_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement3_price"
                                        name="stability_improvement3_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement3_total"
                                        name="stability_improvement3_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                            $watch('volume + price', value => {
                                total = parseFloat(volume) * parseFloat(price);
                                grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Shotcrete Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement4_volume"
                                        name="stability_improvement4_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement4_price"
                                        name="stability_improvement4_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement4_total"
                                        name="stability_improvement4_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Soil Nailing/Ground Anchor Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement5_volume"
                                        name="stability_improvement5_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement5_price"
                                        name="stability_improvement5_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement5_total"
                                        name="stability_improvement5_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Ground Anchor Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement6_volume"
                                        name="stability_improvement6_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement6_price"
                                        name="stability_improvement6_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement6_total"
                                        name="stability_improvement6_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Slope Cover Stone Pass Wall Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement7_volume"
                                        name="stability_improvement7_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement7_price"
                                        name="stability_improvement7_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement7_total"
                                        name="stability_improvement7_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Concrete Retaining Wall Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement8_volume"
                                        name="stability_improvement8_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement8_price"
                                        name="stability_improvement8_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement8_total"
                                        name="stability_improvement8_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Gabion Wall Work (Bronjong)
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement9_volume"
                                        name="stability_improvement9_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement9_price"
                                        name="stability_improvement9_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement9_total"
                                        name="stability_improvement9_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Pile Structure Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement10_volume"
                                        name="stability_improvement10_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement10_price"
                                        name="stability_improvement10_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement10_total"
                                        name="stability_improvement10_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>

                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">Concrete Injection Work
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement11_volume"
                                        name="stability_improvement11_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>2</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement11_price"
                                        name="stability_improvement11_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="stability_improvement11_total"
                                        name="stability_improvement11_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>

                            <tr>
                                <th colspan="5" class="text-left p-2 bg-gray-100">
                                    Additional Structures
                                </th>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">
                                    <select id="additional_structures" name="additional_structures"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                                        <option>Shotcrete</option>
                                        <option>Gabion Wall</option>

                                        <option>Pairs of River/Split Stones</option>
                                        <option>Concrete Wall</option>
                                        <option>Pile</option>

                                    </select>
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="additional_structures_volume"
                                        name="additional_structures_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>3</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="additional_structures_price"
                                        name="additional_structures_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="additional_structures_total"
                                        name="additional_structures_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>
                            <tr>
                                <th colspan="5" class="text-left p-2 bg-gray-100">
                                    Additional reinforcement
                                </th>
                            </tr>
                            <tr x-data="{ volume: 0, price: 0, total: 0 }" x-init="
                                    $watch('volume + price', value => {
                                        total = parseFloat(volume) * parseFloat(price);
                                        grandTotal += total;
                                    })
                                ">
                                <td class="border border-gray-300 px-4 py-2">
                                    <select id="additional_reinforcement" name="additional_reinforcement"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                                        <option>Nailing</option>
                                        <option>Ground Anchor</option>
                                        <option>Rock Bolt</option>
                                    </select>
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="additional_reinforcement_volume"
                                        name="additional_reinforcement_volume" x-model.number="volume"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">m<sup>3</sup></td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="additional_reinforcement_price"
                                        name="additional_reinforcement_price" x-model.number="price"
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="additional_reinforcement_total"
                                        name="additional_reinforcement_total" x-model.number="total" readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-gray-300 px-4 py-2" colspan="4">Total (Rp)</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <input type="number" step="0.01" id="total" name="total" x-model="grandTotal"
                                        readonly
                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </form>
            </div>
        </div>

    </div>

</x-app-layout>