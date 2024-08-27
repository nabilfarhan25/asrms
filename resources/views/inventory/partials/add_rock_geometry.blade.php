<div class="grid sm:grid-cols-2 gap-4" x-data="form()">
    <div>
        <h4 class="font-bold">Geometry</h4>
        <div id="accordion-open" data-accordion="open">
            <p class="text-gray-800 mb-5" id="accordion-open-heading-2">
                (refer to <button type="button" data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                    aria-controls="accordion-open-body-2" class="text-lime-600 font-bold">Figure A1</button>)
            </p>

            <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                <div class="p-4 border border-gray-300 rounded-xl">
                    <img src="/components/slope.png" class="w-full" alt="">
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="rock_slope_height" class="text-sm block font-medium text-gray-900 dark:text-white">Rock
                    Slope Height, <span class="font-serif italic text-gray-600">
                        H<sub>r</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="rock_slope_height" x-model.number="rock_slope_height"
                        name="rock_slope_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="soil_slope_height" class="text-sm block font-medium text-gray-900 dark:text-white">Soil
                    Slope Height, <span class="font-serif italic text-gray-600">
                        H<sub>s</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="soil_slope_height" x-model.number="soil_slope_height"
                        name="soil_slope_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="crest_wall_height" class="text-sm block font-medium text-gray-900 dark:text-white">Crest
                    Wall Height, <span class="font-serif italic text-gray-600">
                        H<sub>cw</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="crest_wall_height" x-model.number="crest_wall_height"
                        name="crest_wall_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="toe_wall_height" class="text-sm block font-medium text-gray-900 dark:text-white">Toe
                    Wall Height, <span class="font-serif italic text-gray-600">
                        H<sub>tw</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="toe_wall_height" x-model.number="toe_wall_height"
                        name="toe_wall_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="rock_slope_angle" class="text-sm block font-medium text-gray-900 dark:text-white">Rock
                    Slope Angle, <span class="font-serif italic text-gray-600">
                        &#952;<sub>r</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="rock_slope_angle" x-model.number="rock_slope_angle"
                        name="rock_slope_angle"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="soil_slope_angle" class="text-sm block font-medium text-gray-900 dark:text-white">Soil
                    Slope Angle, <span class="font-serif italic text-gray-600">
                        &#952;<sub>s</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="soil_slope_angle" x-model.number="soil_slope_angle"
                        name="soil_slope_angle"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="feature_height" class="text-sm block font-medium text-gray-900 dark:text-white">Feature
                    Height, <span class="font-serif italic text-gray-600">
                        H</label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="feature_height" name="feature_height" readonly
                        :value="featureHeight"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

    </div>
    <script>
        function formHandler() {
            return {
                rock_slope_height: 0,
                soil_slope_height: 0,
                crest_wall_height: 0,
                toe_wall_height: 0,
                rock_slope_angle: 0,
                soil_slope_angle: 0,

                get featureHeight() {
                    return this.soil_slope_height + this.rock_slope_height + this.crest_wall_height + this.toe_wall_height;
                }
            }
        }
    </script>
</div>
<x-line />

<h4 class="font-bold mb-2 text-gray-800">Affected Facilities</h4>
<p class="text-gray-800 mb-5">(refer to <a href="#"
        class="text-lime-600 underline dark:text-lime-500 hover:no-underline" data-popover-target="popover-image">Table
        2.1</a>)
</p>
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
</div>
<x-line />

<div>
    <table class="bg-slate-50 border border-gray-300 w-full text-sm mb-3">
        <thead>
            <tr class="bg-gray-200">
                <th rowspan="2" class="border border-gray-300 px-4 py-2 text-left">FEATURE NO.</th>
                <th colspan="4" class="border border-gray-300 px-4 py-2 text-left">
                    SITE OBSERVATIONS/FINDINGS
                </th>
            </tr>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">RAVELLING</th>
                <th class="border border-gray-300 px-4 py-2 text-left">TOPPLING</th>
                <th class="border border-gray-300 px-4 py-2 text-left">WEDGE</th>
                <th class="border border-gray-300 px-4 py-2 text-left">PLANAR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Rock lithology and nature of discontinuity (see
                    Remark A)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling1" name="ravelling1"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling1" name="toppling1"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge1" name="wedge1"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar1" name="planar1"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Dips of discontinuities/line of intersection of
                    discontinuities (°)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling2" name="ravelling2"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling2" name="toppling2"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge2" name="wedge2"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar2" name="planar2"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Persistence of discontinuity (m) (i.e. max.
                    dimension of trace length exposed)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling3" name="ravelling3"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling3" name="toppling3"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge3" name="wedge3"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar3" name="planar3"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Discontinuity spacing (m)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling4" name="ravelling4"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling4" name="toppling4"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge4" name="wedge4"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar4" name="planar4"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Discontinuity roughness and infilling (see
                    Remarks B and C)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling5" name="ravelling5"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling5" name="toppling5"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge5" name="wedge5"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar5" name="planar5"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Width of discontinuity aperture (see Remark D)
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling6" name="ravelling6"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling6" name="toppling6"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge6" name="wedge6"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar6" name="planar6"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Probable scale of failure volume (m³)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling7" name="ravelling7"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling7" name="toppling7"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge7" name="wedge7"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar7" name="planar7"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
        </tbody>
    </table>

    <p class="mb-2 font-bold">
        Remarks
    </p>
    <table class="text-xs bg-slate-50 border border-gray-300 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">A. Nature of Discontinuity</th>
                <th class="border border-gray-300 px-4 py-2 text-left">B. Roughness of Discontinuities</th>
                <th class="border border-gray-300 px-4 py-2 text-left">C. Infilling Materials</th>
                <th class="border border-gray-300 px-4 py-2 text-left">D. Aperture</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">
                    1. Joint<br>
                    2. Fault<br>
                    3. Tension crack<br>
                    4. Shear Plane<br>
                    5. Foliation<br>
                    6. Bedding
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    1. Rough<br>
                    2. Smooth<br>
                    3. Slickensided
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    1. Clean/staining<br>
                    2. Strong/Firm materials<br>
                    <i>e.g. decomposed/disintegrated rock</i><br>
                    3. Weak/Soft materials<br>
                    <i>e.g. soil/kaolin</i><br>
                    4. Others
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    1. Wide (> 200 mm)<br>
                    2. Moderate (20 - 200 mm)<br>
                    3. Narrow (0 - 20 mm)<br>
                    4. Tight (zero)
                </td>
            </tr>
        </tbody>
    </table>

    <p class="mt-2 text-xs">
        Note: If slope face is concealed or part of the slope inaccessible, the characteristics or
        discontinuities should be inferred from inspection of adjoining/nearby exposed slope areas.
    </p>
</div>
<x-line />

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