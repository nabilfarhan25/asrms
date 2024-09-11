@include('inventory.partials.geometry')

<h4 class="font-bold mb-2 text-gray-800">Affected Facilities</h4>
<p class="text-gray-800 mb-5">(refer to <a href="#"
        class="text-lime-600 underline dark:text-lime-500 hover:no-underline" data-popover-target="popover-image">Table
        2.1</a>)</p>
<div data-popover id="popover-image" role="tooltip"
    class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
    <div class="p-3">
        <table class="text-xs max-w-xl">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">Facility Group</th>
                    <th class="border border-gray-300 p-2">Facilities</th>
                    <th class="border border-gray-300 p-2">Consequence-to-life Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-2 text-center" rowspan="2">1</td>
                    <td class="border border-gray-300 p-2">
                        (a) Heavily Used Buildings
                        <ul class="list-disc list-inside">
                            <li>residential building, commercial office, store and shop, hotel, factory,
                                school, power
                                station, ambulance depot, market, hospital, polyclinic, clinic, welfare
                                centre</li>
                        </ul>
                    </td>
                    <td class="border border-gray-300 p-2 text-center" rowspan="3">1</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">
                        (b) Others
                        <ul class="list-disc list-inside">
                            <li>cottage, licensed and squatter areas</li>
                            <li>bus shelter, railway platform and other sheltered public waiting area
                            </li>
                            <li>dangerous goods storage site (e.g. petrol stations)</li>
                            <li>road with very heavy vehicular or pedestrian traffic density</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-center" rowspan="2">2</td>

                    <td class="border border-gray-300 p-2">
                        (a) Lightly Used Buildings
                        <ul class="list-disc list-inside">
                            <li>indoor car park, building within barracks, abattoir, incinerator, indoor
                                games' sport
                                hall, sewage treatment plant, refuse transfer station, church, temple,
                                monastery, civic
                                centre, manned substation</li>
                        </ul>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">
                        (b) Others
                        <ul class="list-disc list-inside">
                            <li>major infrastructure facility (e.g. railway, tramway, flyover, subway,
                                tunnel portal,
                                service reservoir)</li>
                            <li>construction site (if future use not certain)</li>
                            <li>road with heavy vehicular or pedestrian traffic density</li>
                        </ul>
                    </td>
                    <td class="border border-gray-300 p-2 text-center" rowspan="2">2</td>

                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-center">3</td>
                    <td class="border border-gray-300 p-2">
                        <ul class="list-disc list-inside">
                            <li>
                                Heavily used open space and public waiting area (e.g. heavily used
                                playground, open car
                                park, heavily used sitting out area, horticulture garden)
                            </li>
                            <li>
                                Road with moderate vehicular or pedestrian traffic density
                            </li>
                        </ul>

                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-center">4</td>
                    <td class="border border-gray-300 p-2">
                        <ul class="list-disc list-inside">
                            <li>
                                Lightly used open-air recreation area (e.g. district open space, lightly
                                used playground,
                                cemetery, columbarium)
                            </li>
                            <li>
                                Non-dangerous goods storage site
                            </li>
                            <li>
                                Road with low vehicular or pedestrian traffic density
                            </li>
                        </ul>
                    </td>
                    <td class="border border-gray-300 p-2 text-center" rowspan="2">3</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-center">5</td>
                    <td class="border border-gray-300 p-2">
                        <ul class="list-disc list-inside">
                            <li>
                                Remote area (e.g. country park, undeveloped green belt, abandoned quarry)
                            </li>
                            <li>
                                Road with very low vehicular or pedestrian traffic density
                            </li>
                        </ul>
                    </td>
                    <td></td>

                </tr>

            </tbody>
        </table>
    </div>
    <div data-popper-arrow></div>
</div>


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
                    <input type="text" id="toe_facility_type" name="toe_facility_type"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select id="toe_facility_group" name="toe_facility_group"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                        <option value="1(a)">1 (A)</option>
                        <option value="1(b)">1 (B)</option>

                        <option value="2(a)">2 (A)</option>
                        <option value="2(b)">2 (B)</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <div class="flex">
                        <div class="mr-2">
                            <label for="toe_l" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">L
                                =
                                -- m</label>
                            <input type="number" step="0.01" id="toe_l" name="toe_l" required
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>

                        <div>
                            <label for="toe_w"
                                class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">&#969;
                                = -- Deg</label>
                            <input type="number" step="0.01" id="toe_w" name="toe_w" required
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Crest</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="crest_facility_type" name="crest_facility_type"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select id="crest_facility_group" name="crest_facility_group"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                        <option value="1(a)">1 (A)</option>
                        <option value="1(b)">1 (B)</option>

                        <option value="2(a)">2 (A)</option>
                        <option value="2(b)">2 (B)</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </td>

                <td class="border border-gray-300 px-4 py-2">
                    <label for="toe_l" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">D
                        =
                        -- m</label>
                    <input type="number" step="0.01" id="crest_d" name="crest_d" required
                        class="mb-1 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
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
                    <input type="text" id="toe_facility_type_2" name="toe_facility_type_2" :disabled="!section2Enabled"
                        :class="{'bg-slate-100': !section2Enabled}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select id="toe_facility_group_2" name="toe_facility_group_2" :disabled="!section2Enabled"
                        :class="{'bg-slate-100': !section2Enabled}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                        <option value="1(a)">1 (A)</option>
                        <option value="1(b)">1 (B)</option>

                        <option value="2(a)">2 (A)</option>
                        <option value="2(b)">2 (B)</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <div class="flex">
                        <div class="mr-2">
                            <label for="toe_l_2" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">L
                                =
                                -- m</label>
                            <input type="number" step="0.01" id="toe_l_2" name="toe_l_2" required
                                :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>

                        <div>
                            <label for="toe_w_2"
                                class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">&#969;
                                = -- Deg</label>
                            <input type="number" step="0.01" id="toe_w_2" name="toe_w_2" required
                                :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Crest</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="crest_facility_type_2" name="crest_facility_type_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select id="crest_facility_group_2" name="crest_facility_group_2" :disabled="!section2Enabled"
                        :class="{'bg-slate-100': !section2Enabled}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                        <option value="1(a)">1 (A)</option>
                        <option value="1(b)">1 (B)</option>

                        <option value="2(a)">2 (A)</option>
                        <option value="2(b)">2 (B)</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </td>

                <td class="border border-gray-300 px-4 py-2">
                    <label for="toe_l" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">D
                        =
                        -- m</label>
                    <input type="number" step="0.01" id="crest_d_2" name="crest_d_2" required
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="mb-1 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
        </tbody>
    </table>
</div>
<x-line />
@include('inventory.partials.geometry')

@include('inventory.partials.affected_facilities')

<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">PLAN AND CROSS SECTION</h4>
    </div>
    <div>
        <div class="border border-gray-300 rounded-lg p-3 mb-2">
            <h2 class="font-bold text-lg mb-2">Plan Section</h2>
            <input type="file" name="plan" class="filestyle" />
            <div class="">
                <h2 class="font-bold text-sm">PLAN (1:1000)</h2>
                <ol class="list-decimal list-inside text-xs">
                    <li>Feature boundary (SIS) and revised feature boundary (if applicable)</li>
                    <li>Section mark</li>
                    <li>Photograph location and direction</li>
                    <li>Signs of distress, if any</li>
                    <li>Signs of seepage, if any</li>
                    <li>Engineering measures (e.g. soil nails, shotcrete & buttress)</li>
                </ol>
            </div>
        </div>
        <div class="border border-gray-300 rounded-lg p-3 mb-2">
            <h2 class="font-bold text-lg mb-2">Cross Section</h2>
            <input type="file" name="cross" class="filestyle" />
            <div class="">
                <h2 class="font-bold text-sm">CROSS-SECTIONS</h2>
                <ol class="list-decimal list-inside text-xs">
                    <li>Fully dimensioned</li>
                    <li>Engineering measures (e.g. soil nails, shotcrete & buttress)</li>
                </ol>
            </div>
        </div>
    </div>
</div>