<h4 class="font-bold mb-2 text-gray-800">Affected Facilities</h4>

<div class="relative overflow-x-auto">
    <table class="bg-slate-50 border border-gray-300 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">
                    Section 1-1
                </th>
                <th class="min-w-96 border border-gray-300 px-4 py-2 text-left ">
                    Facility Type (for roads, please give name)
                </th>
                <th class="min-w-52 border border-gray-300 px-4 py-2 text-left">
                    Facility Group
                </th>
                <th class="min-w-64 border border-gray-300 px-4 py-2 text-left">
                    Proximity
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Toe</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="toe_facility_type" required name="toe_facility_type"
                        value="{{isset($geometry->toe_facility_type) ? $geometry->toe_facility_type : ''}}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <div
                        x-data="{ toe_facility_group_modal: false, toe_facility_group: '{{ isset($geometry->toe_facility_group) ? $geometry->toe_facility_group : '1(a)' }}' }">
                        <div class="flex">
                            <button @click="toe_facility_group_modal = true" type="button"
                                class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none">
                                <span x-text="toe_facility_group ? toe_facility_group : 'Select an option'"></span>
                            </button>
                        </div>

                        <div x-show="toe_facility_group_modal" @click.away="toe_facility_group_modal = false" x-cloak
                            class="max-h-screen fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50">
                            <div class="bg-white p-6 rounded-2xl">
                                <div class="flex justify-between">
                                    <h2 class="text-lg font-semibold mb-4">Select an Facility Group</h2>
                                    <button type="button" @click="toe_facility_group_modal = false"
                                        class="px-4 py-2 hover:bg-gray-50 rounded-xl">
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                    </button>
                                </div>

                                <table>
                                    <tr>
                                        <th class="p-1">
                                            <div class="bg-gray-100 p-3 rounded-lg">
                                                Facility Group
                                            </div>
                                        </th>
                                        <th class="p-1">
                                            <div class="bg-gray-100 p-3 rounded-lg">
                                                Facilities
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">
                                            <div>01</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group = '1(a)'; toe_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">a. Heavily Used Buildings</h4>
                                                <p class="max-w-2xl text-sm">
                                                    Residential building, commercial office, store and shop, hotel,
                                                    factory, school, power
                                                    station, ambulance depot, market, hospital, polyclinic, clinic,
                                                    welfare centre
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group = '1(b)'; toe_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">b. Others</h4>
                                                <p class="max-w-2xl text-sm">
                                                    - Cottage, ensed and squatter areas<br> - Bus shelter, railway
                                                    platform and other
                                                    sheltered pub waiting area<br> - Dangerous goods storage site (e.g.
                                                    petrol
                                                    stations)<br> - Road with very heavy vehicular or pedestrian traffic
                                                    density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">
                                            <div>02</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group = '2(a)'; toe_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">a. Lightly Used Buildings</h4>

                                                <p class="max-w-2xl text-sm">
                                                    Indoor car park, building within barracks, abattoir, incinerator,
                                                    indoor games sport hall, sewage treatment plant, refuse transfer
                                                    station, church, temple, monastery, civic centre, manned substation
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group = '2(b)'; toe_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">b. Others</h4>

                                                <p class="max-w-2xl text-sm">
                                                    - Major infrastructure facility (e.g. railway, tramway, flyover,
                                                    subway, tunnel portal, service reservoir)<br>
                                                    - Construction site (if future use not certain)<br>
                                                    - Road with heavy vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>03</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group = '3'; toe_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Heavily used open space and public waiting area (e.g. heavily used
                                                    playground, open car park, heavily used sitting out area,
                                                    horticulture garden)<br>
                                                    - Road with moderate vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>04</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group = '4'; toe_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Lightly used open-air recreation area (e.g. district open space,
                                                    lightly
                                                    used playground, cemetery, columbarium)<br>
                                                    - Non-dangerous goods storage site<br>
                                                    - Road with low vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>05</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group = '5'; toe_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Remote area (e.g. country park, undeveloped green belt, abandoned
                                                    quarry)<br>
                                                    - Road with very low vehicular or pedestrian traffic density<br>
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <input type="hidden" name="toe_facility_group" :value="toe_facility_group" />
                    </div>

                    <style>
                        [x-cloak] {
                            display: none;
                        }
                    </style>
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <div class="flex">
                        <div class="mr-2">
                            <label for="toe_l" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">L
                                =
                                -- m</label>
                            <input type="number" step="0.01" id="toe_l" name="toe_l" required value="{{isset($geometry->toe_l) ?
                    $geometry->toe_l : 0}}"
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>

                        <div>
                            <label for="toe_w"
                                class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">&#969;
                                = -- Deg</label>
                            <input type="number" step="0.01" id="toe_w" name="toe_w" required value="{{isset($geometry->toe_w) ?
                    $geometry->toe_w : 0}}"
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Crest</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="crest_facility_type" required name="crest_facility_type"
                        value="{{isset($geometry->crest_facility_type) ? $geometry->crest_facility_type : ''}}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">

                    <div
                        x-data="{ crest_facility_group_modal: false, crest_facility_group: '{{ isset($geometry->crest_facility_group) ? $geometry->crest_facility_group : '1(a)' }}' }">
                        <div class="flex">
                            <button @click="crest_facility_group_modal = true" type="button"
                                class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none">
                                <span x-text="crest_facility_group ? crest_facility_group : 'Select an option'"></span>
                            </button>
                        </div>

                        <div x-show="crest_facility_group_modal" @click.away="crest_facility_group_modal = false"
                            x-cloak
                            class="max-h-screen fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50">
                            <div class="bg-white p-6 rounded-2xl">
                                <div class="flex justify-between">
                                    <h2 class="text-lg font-semibold mb-4">Select an Facility Group</h2>
                                    <button type="button" @click="crest_facility_group_modal = false"
                                        class="px-4 py-2 hover:bg-gray-50 rounded-xl">
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                    </button>
                                </div>

                                <table>
                                    <tr>
                                        <th class="p-1">
                                            <div class="bg-gray-100 p-3 rounded-lg">
                                                Facility Group
                                            </div>
                                        </th>
                                        <th class="p-1">
                                            <div class="bg-gray-100 p-3 rounded-lg">
                                                Facilities
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">
                                            <div>01</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group = '1(a)'; crest_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">a. Heavily Used Buildings</h4>
                                                <p class="max-w-2xl text-sm">
                                                    Residential building, commercial office, store and shop, hotel,
                                                    factory, school, power
                                                    station, ambulance depot, market, hospital, polyclinic, clinic,
                                                    welfare centre
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group = '1(b)'; crest_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">b. Others</h4>
                                                <p class="max-w-2xl text-sm">
                                                    - Cottage, ensed and squatter areas<br> - Bus shelter, railway
                                                    platform and other
                                                    sheltered pub waiting area<br> - Dangerous goods storage site (e.g.
                                                    petrol
                                                    stations)<br> - Road with very heavy vehicular or pedestrian traffic
                                                    density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">
                                            <div>02</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group = '2(a)'; crest_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">a. Lightly Used Buildings</h4>

                                                <p class="max-w-2xl text-sm">
                                                    Indoor car park, building within barracks, abattoir, incinerator,
                                                    indoor games sport hall, sewage treatment plant, refuse transfer
                                                    station, church, temple, monastery, civic centre, manned substation
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group = '2(b)'; crest_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">b. Others</h4>

                                                <p class="max-w-2xl text-sm">
                                                    - Major infrastructure facility (e.g. railway, tramway, flyover,
                                                    subway, tunnel portal, service reservoir)<br>
                                                    - Construction site (if future use not certain)<br>
                                                    - Road with heavy vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>03</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group = '3'; crest_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Heavily used open space and public waiting area (e.g. heavily used
                                                    playground, open car park, heavily used sitting out area,
                                                    horticulture garden)<br>
                                                    - Road with moderate vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>04</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group = '4'; crest_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Lightly used open-air recreation area (e.g. district open space,
                                                    lightly
                                                    used playground, cemetery, columbarium)<br>
                                                    - Non-dangerous goods storage site<br>
                                                    - Road with low vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>05</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group = '5'; crest_facility_group_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Remote area (e.g. country park, undeveloped green belt, abandoned
                                                    quarry)<br>
                                                    - Road with very low vehicular or pedestrian traffic density<br>
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <input type="hidden" name="crest_facility_group" :value="crest_facility_group" />
                    </div>

                    <style>
                        [x-cloak] {
                            display: none;
                        }
                    </style>
                </td>

                <td class="border border-gray-300 px-4 py-2">
                    <label for="toe_l" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">D
                        =
                        -- m</label>
                    <input type="number" step="0.01" id="crest_d" name="crest_d" required value="{{isset($geometry->crest_d) ?
                    $geometry->crest_d : 0}}" class="mb-1 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600
                    focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600
                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
        </tbody>
    </table>

    <table class="bg-slate-50 border border-gray-300 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">
                    Section 2-2
                </th>
                <th class="min-w-96 border border-gray-300 px-4 py-2 text-left">
                    Facility Type (for roads, please give name)
                </th>
                <th class="min-w-52 border border-gray-300 px-4 py-2 text-left">
                    Facility Group
                </th>
                <th class="min-w-64 border border-gray-300 px-4 py-2 text-left">
                    Proximity
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Toe</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="toe_facility_type_2" required name="toe_facility_type_2"
                        value="{{isset($geometry->toe_facility_type_2) ? $geometry->toe_facility_type_2 : ''}}"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <div
                        x-data="{ toe_facility_group_2_modal: false, toe_facility_group_2: '{{ isset($geometry->toe_facility_group_2) ? $geometry->toe_facility_group_2 : '1(a)' }}' }">
                        <div class="flex">
                            <button :disabled="!section2Enabled" @click="toe_facility_group_2_modal = true"
                                type="button"
                                class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none">
                                <span x-text="toe_facility_group_2 ? toe_facility_group_2 : 'Select an option'"></span>
                            </button>
                        </div>

                        <div x-show="toe_facility_group_2_modal" @click.away="toe_facility_group_2_modal = false"
                            x-cloak
                            class="max-h-screen fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50">
                            <div class="bg-white p-6 rounded-2xl">
                                <div class="flex justify-between">
                                    <h2 class="text-lg font-semibold mb-4">Select an Facility Group</h2>
                                    <button type="button" @click="toe_facility_group_2_modal = false"
                                        class="px-4 py-2 hover:bg-gray-50 rounded-xl">
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                    </button>
                                </div>

                                <table>
                                    <tr>
                                        <th class="p-1">
                                            <div class="bg-gray-100 p-3 rounded-lg">
                                                Facility Group
                                            </div>
                                        </th>
                                        <th class="p-1">
                                            <div class="bg-gray-100 p-3 rounded-lg">
                                                Facilities
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">
                                            <div>01</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group_2 = '1(a)'; toe_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">a. Heavily Used Buildings</h4>
                                                <p class="max-w-2xl text-sm">
                                                    Residential building, commercial office, store and shop, hotel,
                                                    factory, school, power
                                                    station, ambulance depot, market, hospital, polyclinic, clinic,
                                                    welfare centre
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group_2 = '1(b)'; toe_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">b. Others</h4>
                                                <p class="max-w-2xl text-sm">
                                                    - Cottage, ensed and squatter areas<br> - Bus shelter, railway
                                                    platform and other
                                                    sheltered pub waiting area<br> - Dangerous goods storage site (e.g.
                                                    petrol
                                                    stations)<br> - Road with very heavy vehicular or pedestrian traffic
                                                    density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">
                                            <div>02</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group_2 = '2(a)'; toe_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">a. Lightly Used Buildings</h4>

                                                <p class="max-w-2xl text-sm">
                                                    Indoor car park, building within barracks, abattoir, incinerator,
                                                    indoor games sport hall, sewage treatment plant, refuse transfer
                                                    station, church, temple, monastery, civic centre, manned substation
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group_2 = '2(b)'; toe_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">b. Others</h4>

                                                <p class="max-w-2xl text-sm">
                                                    - Major infrastructure facility (e.g. railway, tramway, flyover,
                                                    subway, tunnel portal, service reservoir)<br>
                                                    - Construction site (if future use not certain)<br>
                                                    - Road with heavy vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>03</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group_2 = '3'; toe_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Heavily used open space and public waiting area (e.g. heavily used
                                                    playground, open car park, heavily used sitting out area,
                                                    horticulture garden)<br>
                                                    - Road with moderate vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>04</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group_2 = '4'; toe_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Lightly used open-air recreation area (e.g. district open space,
                                                    lightly
                                                    used playground, cemetery, columbarium)<br>
                                                    - Non-dangerous goods storage site<br>
                                                    - Road with low vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>05</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="toe_facility_group_2 = '5'; toe_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Remote area (e.g. country park, undeveloped green belt, abandoned
                                                    quarry)<br>
                                                    - Road with very low vehicular or pedestrian traffic density<br>
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <input type="hidden" :disabled="!section2Enabled" name="toe_facility_group_2"
                            :value="toe_facility_group_2" />
                    </div>

                    <style>
                        [x-cloak] {
                            display: none;
                        }
                    </style>
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <div class="flex">
                        <div class="mr-2">
                            <label for="toe_l_2" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">L
                                =
                                -- m</label>
                            <input type="number" step="0.01" id="toe_l_2" name="toe_l_2" required
                                :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}" value="{{isset($geometry->toe_l_2) ?
                    $geometry->toe_l_2 : 0}}"
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>

                        <div>
                            <label for="toe_w_2"
                                class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">&#969;
                                = -- Deg</label>
                            <input type="number" step="0.01" id="toe_w_2" name="toe_w_2" required
                                :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}" value="{{isset($geometry->toe_w_2) ?
                    $geometry->toe_w_2 : 0}}"
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Crest</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="crest_facility_type_2" required name="crest_facility_type_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        value="{{isset($geometry->crest_facility_type_2) ? $geometry->crest_facility_type_2 : ''}}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <div
                        x-data="{ crest_facility_group_2_modal: false, crest_facility_group_2: '{{ isset($geometry->crest_facility_group_2) ? $geometry->crest_facility_group_2 : '1(a)' }}' }">
                        <div class="flex">
                            <button :disabled="!section2Enabled" @click="crest_facility_group_2_modal = true"
                                type="button"
                                class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg focus:outline-none">
                                <span
                                    x-text="crest_facility_group_2 ? crest_facility_group_2 : 'Select an option'"></span>
                            </button>
                        </div>

                        <div x-show="crest_facility_group_2_modal" @click.away="crest_facility_group_2_modal = false"
                            x-cloak
                            class="max-h-screen fixed inset-0 z-10 flex items-center justify-center bg-gray-900 bg-opacity-50">
                            <div class="bg-white p-6 rounded-2xl">
                                <div class="flex justify-between">
                                    <h2 class="text-lg font-semibold mb-4">Select an Facility Group</h2>
                                    <button type="button" @click="crest_facility_group_2_modal = false"
                                        class="px-4 py-2 hover:bg-gray-50 rounded-xl">
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                    </button>
                                </div>

                                <table>
                                    <tr>
                                        <th class="p-1">
                                            <div class="bg-gray-100 p-3 rounded-lg">
                                                Facility Group
                                            </div>
                                        </th>
                                        <th class="p-1">
                                            <div class="bg-gray-100 p-3 rounded-lg">
                                                Facilities
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">
                                            <div>01</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group_2 = '1(a)'; crest_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">a. Heavily Used Buildings</h4>
                                                <p class="max-w-2xl text-sm">
                                                    Residential building, commercial office, store and shop, hotel,
                                                    factory, school, power
                                                    station, ambulance depot, market, hospital, polyclinic, clinic,
                                                    welfare centre
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group_2 = '1(b)'; crest_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">b. Others</h4>
                                                <p class="max-w-2xl text-sm">
                                                    - Cottage, ensed and squatter areas<br> - Bus shelter, railway
                                                    platform and other
                                                    sheltered pub waiting area<br> - Dangerous goods storage site (e.g.
                                                    petrol
                                                    stations)<br> - Road with very heavy vehicular or pedestrian traffic
                                                    density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2">
                                            <div>02</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group_2 = '2(a)'; crest_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">a. Lightly Used Buildings</h4>

                                                <p class="max-w-2xl text-sm">
                                                    Indoor car park, building within barracks, abattoir, incinerator,
                                                    indoor games sport hall, sewage treatment plant, refuse transfer
                                                    station, church, temple, monastery, civic centre, manned substation
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group_2 = '2(b)'; crest_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <h4 class="font-bold">b. Others</h4>

                                                <p class="max-w-2xl text-sm">
                                                    - Major infrastructure facility (e.g. railway, tramway, flyover,
                                                    subway, tunnel portal, service reservoir)<br>
                                                    - Construction site (if future use not certain)<br>
                                                    - Road with heavy vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>03</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group_2 = '3'; crest_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Heavily used open space and public waiting area (e.g. heavily used
                                                    playground, open car park, heavily used sitting out area,
                                                    horticulture garden)<br>
                                                    - Road with moderate vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>04</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group_2 = '4'; crest_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Lightly used open-air recreation area (e.g. district open space,
                                                    lightly
                                                    used playground, cemetery, columbarium)<br>
                                                    - Non-dangerous goods storage site<br>
                                                    - Road with low vehicular or pedestrian traffic density
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div>05</div>
                                        </th>
                                        <td class="p-1">
                                            <button type="button"
                                                @click="crest_facility_group_2 = '5'; crest_facility_group_2_modal = false"
                                                class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg w-full text-left">
                                                <p class="max-w-2xl text-sm">
                                                    - Remote area (e.g. country park, undeveloped green belt, abandoned
                                                    quarry)<br>
                                                    - Road with very low vehicular or pedestrian traffic density<br>
                                                </p>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <input type="hidden" name="crest_facility_group_2" :disabled="!section2Enabled"
                            :value="crest_facility_group_2" />
                    </div>

                    <style>
                        [x-cloak] {
                            display: none;
                        }
                    </style>
                </td>

                <td class="border border-gray-300 px-4 py-2">
                    <label for="toe_l" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">D
                        =
                        -- m</label>
                    <input type="number" step="0.01" id="crest_d_2" name="crest_d_2" required
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}" value="{{isset($geometry->crest_d_2) ?
                    $geometry->crest_d_2 : 0}}"
                        class="mb-1 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
        </tbody>
    </table>
</div>
<x-line />