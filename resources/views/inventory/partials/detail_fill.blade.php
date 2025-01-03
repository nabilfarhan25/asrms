<div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel"
    aria-labelledby="dashboard-tab">
    <div class="grid sm:grid-cols-2 ">
        <div class="py-5 pr-3 font-bold">
            <h4 class="font-bold mb-2 text-gray-800">Geometry</h4>
            <div id="accordion-open" data-accordion="open">
                <p class="text-gray-800 mb-2" id="accordion-open-heading-2">
                    (refer to <button type="button" data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                        aria-controls="accordion-open-body-2" class="text-lime-600 font-bold">Figure A1</button>)
                </p>

                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-4 border border-gray-300 rounded-xl">
                        <img src="/components/slope-fill.png" id="figureA1" class="w-full" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">

                            </th>
                            <th scope="col" class="px-6 py-3">
                                Section 1-1
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Fill Slope
                                    Height,<span class="italic text-gray-600">
                                        H<sub>r</sub>
                                    </span>
                                </label>
                            </th>
                            <td class="px-6 py-4">
                                {{$geometry->fill_slope_height}} m
                            </td>
                        </tr>
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Crest Wall
                                    Height,<span class="italic text-gray-600">
                                        H<sub>cw</sub>
                                    </span>
                                </label>
                            </th>
                            <td class="px-6 py-4">
                                {{$geometry->crest_wall_height}} m
                            </td>
                        </tr>
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Toe Wall
                                    Height,<span class="italic text-gray-600">
                                        H<sub>tw</sub>
                                    </span>
                                </label>
                            </th>
                            <td class="px-6 py-4">
                                {{$geometry->toe_wall_height}} m
                            </td>
                        </tr>
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Fill Slope
                                    Angle,<span class="italic text-gray-600">
                                        &#952;<sub>r</sub>
                                    </span>
                                </label>
                            </th>
                            <td class="px-6 py-4">
                                {{$geometry->fill_slope_angle}} Deg
                            </td>
                        </tr>
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Feature Height,<span
                                        class="italic text-gray-600">
                                        H
                                    </span>
                                </label>
                            </th>
                            <td class="px-6 py-4">
                                {{$geometry->feature_height}} m
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <x-line />

    <div>
        <h4 class="font-bold mb-2 text-gray-800">Affected Facilities</h4>
        <p class="text-gray-800 mb-5">(refer to <a href="#"
                class="text-lime-600 underline dark:text-lime-500 hover:no-underline"
                data-popover-target="popover-image">Table
                2.1</a>)</p>
        <div data-popover id="popover-image" role="tooltip"
            class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
            <div class="p-3">
                <table class="text-xs max-w-xl">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 p-2">Facility Group</th>
                            <th class="border border-gray-300 p-2">Facilities</th>
                            <th class="border border-gray-300 p-2">Consequence-to-life Category
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center" rowspan="2">1
                            </td>
                            <td class="border border-gray-300 p-2">
                                (a) Heavily Used Buildings
                                <ul class="list-disc list-inside">
                                    <li>residential building, commercial office, store and shop,
                                        hotel, factory,
                                        school, power
                                        station, ambulance depot, market, hospital, polyclinic,
                                        clinic, welfare
                                        centre</li>
                                </ul>
                            </td>
                            <td class="border border-gray-300 p-2 text-center" rowspan="3">1
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2">
                                (b) Others
                                <ul class="list-disc list-inside">
                                    <li>cottage, licensed and squatter areas</li>
                                    <li>bus shelter, railway platform and other sheltered public
                                        waiting area
                                    </li>
                                    <li>dangerous goods storage site (e.g. petrol stations)</li>
                                    <li>road with very heavy vehicular or pedestrian traffic
                                        density</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center" rowspan="2">2
                            </td>

                            <td class="border border-gray-300 p-2">
                                (a) Lightly Used Buildings
                                <ul class="list-disc list-inside">
                                    <li>indoor car park, building within barracks, abattoir,
                                        incinerator, indoor
                                        games' sport
                                        hall, sewage treatment plant, refuse transfer station,
                                        church, temple,
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
                                    <li>major infrastructure facility (e.g. railway, tramway,
                                        flyover, subway,
                                        tunnel portal,
                                        service reservoir)</li>
                                    <li>construction site (if future use not certain)</li>
                                    <li>road with heavy vehicular or pedestrian traffic density
                                    </li>
                                </ul>
                            </td>
                            <td class="border border-gray-300 p-2 text-center" rowspan="2">2
                            </td>

                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center">3</td>
                            <td class="border border-gray-300 p-2">
                                <ul class="list-disc list-inside">
                                    <li>
                                        Heavily used open space and public waiting area (e.g.
                                        heavily used
                                        playground, open car
                                        park, heavily used sitting out area, horticulture
                                        garden)
                                    </li>
                                    <li>
                                        Road with moderate vehicular or pedestrian traffic
                                        density
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
                                        Lightly used open-air recreation area (e.g. district
                                        open space, lightly
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
                            <td class="border border-gray-300 p-2 text-center" rowspan="2">3
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-2 text-center">5</td>
                            <td class="border border-gray-300 p-2">
                                <ul class="list-disc list-inside">
                                    <li>
                                        Remote area (e.g. country park, undeveloped green belt,
                                        abandoned quarry)
                                    </li>
                                    <li>
                                        Road with very low vehicular or pedestrian traffic
                                        density
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
                            Facility Type
                        </th>
                        <th class="min-w-52 border border-gray-300 px-4 py-2 text-left">
                            Facility Group
                        </th>
                        <th class="min-w-64 border border-gray-300 px-4 py-2 text-left" colspan="2">
                            Proximity
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 font-bold">Toe</td>
                        <td class="border border-gray-300 px-4 py-2">
                            {{$geometry->toe_facility_type}}
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <span class="uppercase">{{$geometry->toe_facility_group}}</span>

                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div class="">
                                <label for="toe_l" class="block mb-1 font-medium">Distance
                                    (L)
                                    : <span class="font-bold">{{$geometry->toe_l}}
                                        m</span></label>
                            </div>
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <div>
                                <label for="toe_w" class="block mb-1 font-medium">Shadow
                                    Angle (&#969;)
                                    : <span class="font-bold">{{$geometry->toe_w}}
                                        Deg</span></label>
                            </div>

                        </td>

                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 font-bold">Crest</td>
                        <td class="border border-gray-300 px-4 py-2">
                            {{$geometry->crest_facility_type}}
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <span class="uppercase">{{$geometry->crest_facility_group}}</span>
                        </td>

                        <td class="border border-gray-300 px-4 py-2" colspan="2">
                            <label for="toe_l" class="block mb-1 font-medium">Distance (D)
                                : <span class="font-bold">{{$geometry->crest_d}}
                                    m</span></label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel"
    aria-labelledby="settings-tab">

    <div class="mb-3">
        <div class="mb-2">
            <label for="" class="font-bold">Drainage Provision</label>
        </div>

        <div class="mb-3 border border-gray-200 ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="text-center py-3 px-2">
                            Location
                        </th>
                        <th scope="col" class="text-center py-3 px-2">
                            Size (mm)
                        </th>
                        <th scope="col" class="text-center py-3 px-2">
                            Spacing (m)
                        </th>
                        <th scope="col" class="text-center py-3 px-2">
                            Type
                        </th>
                        <th scope="col" class="text-center py-3 px-2">
                            Adequate Capacity
                        </th>
                        <th scope="col" class="text-center py-3 px-2">
                            Remarks
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Crest
                        </th>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->crest_size) ?
                                $characteristic->crest_size : '-'}}
                            </div>

                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->crest_spacing) ?
                                $characteristic->crest_spacing : '-'}}
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->crest_type) ?
                                $characteristic->crest_type : '-'}}
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->crest_adequante) ?
                                $characteristic->crest_adequante : '-'}}
                            </div>
                        </td>

                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->crest_remarks) ?
                                $characteristic->crest_remarks : '-'}}
                            </div>
                        </td>
                    </tr>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Berm
                        </th>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->berm_size) ?
                                $characteristic->berm_size : '-'}}
                            </div>

                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->berm_spacing) ?
                                $characteristic->berm_spacing : '-'}}
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->berm_type) ?
                                $characteristic->berm_type : '-'}}
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->berm_adequante) ?
                                $characteristic->berm_adequante : '-'}}
                            </div>
                        </td>

                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->berm_remarks) ?
                                $characteristic->berm_remarks : '-'}}
                            </div>
                        </td>
                    </tr>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            On Slope
                        </th>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->onslope_size) ?
                                $characteristic->onslope_size : '-'}}
                            </div>

                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->onslope_spacing) ?
                                $characteristic->onslope_spacing : '-'}}
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->onslope_type) ?
                                $characteristic->onslope_type : '-'}}
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->onslope_adequante) ?
                                $characteristic->onslope_adequante : '-'}}
                            </div>
                        </td>

                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->onslope_remarks) ?
                                $characteristic->onslope_remarks : '-'}}
                            </div>
                        </td>
                    </tr>

                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Toe
                        </th>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->toe_size) ?
                                $characteristic->toe_size : '-'}}
                            </div>

                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->toe_spacing) ?
                                $characteristic->toe_spacing : '-'}}
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->toe_type) ?
                                $characteristic->toe_type : '-'}}
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->toe_adequante) ?
                                $characteristic->toe_adequante : '-'}}
                            </div>
                        </td>

                        <td class="p-2">
                            <div class="font-bold bg-gray-100 py-2 px-3 rounded-xl  border border-gray-300">
                                {{isset($characteristic->toe_remarks) ?
                                $characteristic->toe_remarks : '-'}}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        @isset($characteristic->surface_drainage_provision)
        <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
            {{$characteristic->surface_drainage_provision}}
        </div>
        @endisset
    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Seepage Condition </h4>
            <p class="text-gray-400 text-xs">(Provide photographic
                records of signs of seepage
                and indicate location &
                extent on plan &
                cross-sections)</p>
        </div>
        <div>
            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">Signs of Seepage</legend>

                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->signs_of_seepage}}
                </div>
            </div>

            @if ($characteristic->signs_of_seepage === "Yes")
            <table class="text-sm w-full bg-white border border-gray-300"
                x-data="{ above_mid_height: '{{isset($characteristic->above_mid_height) ? $characteristic->above_mid_height : ''}}', below_mid_height: '{{isset($characteristic->below_mid_height) ? $characteristic->below_mid_height : ''}}'}">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left">Seepage
                            Location</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Copious</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">
                            Trickling/damp</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Stain</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">At or above mid-height
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center"><input
                                class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                type="radio" disabled value="copious" x-model="above_mid_height">
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center"><input
                                class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                type="radio" disabled value="trickling/damp" x-model="above_mid_height">
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center"><input
                                class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                type="radio" disabled value="stain" x-model="above_mid_height">
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Below mid-height</td>
                        <td class="border border-gray-300 px-4 py-2 text-center"><input
                                class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                type="radio" disabled value="copious" x-model="below_mid_height">
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center"><input
                                class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                type="radio" disabled value="trickling/damp" x-model="below_mid_height">
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center"><input
                                class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                type="radio" disabled value="stain" x-model="below_mid_height">
                        </td>
                    </tr>
                </tbody>
            </table>
            @endif

        </div>


    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Water-carrying Services </h4>
        </div>
        <div>
            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">Water-carrying Services</legend>

                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->water_carrying_services}}
                </div>
            </div>

            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">Signs of leakage</legend>

                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->signs_of_leakage}} {{$characteristic->signs_of_leakage == 'Yes' ?
                    ', '. $characteristic->leakage_location_condition : ''}}
                </div>
            </div>

        </div>
    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Catchment Characteristics </h4>
        </div>
        <div>
            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">
                        Size of Catchment:</legend>

                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->size_of_catchment}} m<sup>2</sup>
                </div>
            </div>

            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">Topographic Setting:
                    </legend>

                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->catchment_characteristics}}
                </div>
            </div>

        </div>
    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Volume of Fill Body </h4>
        </div>
        <div>
            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">
                        Volume of fill body estimated by:</legend>

                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->volume_fill_estimate_by}}
                </div>
            </div>

            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">Estimated volume of fill body
                    </legend>

                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->volume_fill_estimate}} m<sup>3</sup>
                </div>
            </div>

        </div>
    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Channelisation of Debris </h4>
            <p class="text-gray-400 text-xs">Provide data based on SIFT Report on the slope</p>
        </div>
        <div>
            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">
                        In case of failure, channelization of debris flow is possible:</legend>
                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->channelisation_of_debris}}
                </div>
            </div>
        </div>

    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Erosion and Entrainment
                along Debris Trail
            </h4>
            <p class="text-gray-400 text-xs">Provide data based on SIFT Report on the slope</p>
        </div>
        <div>
            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">
                        In case of failure, erosion and entrainment is possible along the run-out path of the
                        debris flow:</legend>
                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->erosion_and_entrainment}}
                </div>
            </div>
        </div>
    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Spread of Debris
            </h4>
            <p class="text-gray-400 text-xs">Provide data based on SIFT Report on the slope</p>
        </div>
        <div>
            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">
                        In case of failure, spread of debris is possible:
                    </legend>
                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->spread_of_debris}}
                </div>
            </div>
        </div>
    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Unstable Terrain
            </h4>
        </div>
        <div>
            <div class="mb-3">
                <div class="mb-2">
                    <legend class=" mb-2">
                        Obtain terrain classification for the area(s) between the slope and toe facilities based on
                        relevant GASP Reports
                    </legend>
                </div>
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->unstable_terrain}}
                </div>
            </div>
        </div>
    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Signs of Distress</h4>
            <p class="text-gray-400 text-xs">(Provide photographic
                records of signs of distress
                and indicate location &
                extent on plan &
                cross-sections)</p>
        </div>
        <div>
            <div class="mb-3">
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->signs_of_distress}}
                </div>
            </div>
        </div>
    </div>
    <x-line />

    <div class="grid sm:grid-cols-2 gap-4">
        <div>
            <h4 class="font-bold">Instability after
                Formation/Treatment</h4>
            <p class="text-gray-400 text-xs">(Provide photographic
                records of signs of distress(Provide photographic
                records of the inferred
                failure scar and indicate
                location on plan &
                cross-sections)</p>
        </div>
        <div>
            <div class="mb-3">
                <div class="font-bold bg-gray-100 p-3 rounded-xl  border border-gray-300">
                    {{$characteristic->instability_after_slope}}
                </div>
            </div>
        </div>
    </div>
    <x-line />


</div>