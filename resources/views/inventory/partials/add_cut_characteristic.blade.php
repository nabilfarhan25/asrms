<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">Slope Protection</h4>

    </div>
    <div>
        <div
            x-data="{ surface_cover: '{{isset($characteristic->surface_cover) ? $characteristic->surface_cover : ''}}' }">
            <p class="font-medium text-gray-800 mb-1">
                Surface cover with :
            </p>
            <!-- Input Field -->
            <input type="text" placeholder="Write or choose option to fill input" name="surface_cover"
                class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                x-model="surface_cover" />

            <!-- Radio Buttons -->
            <div class="mt-3">
                <div class="flex items-center mb-2">
                    <input type="radio" id="surface_opt1" value="Vegetation : 0 %" x-model="surface_cover" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                    dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600" />
                    <label for="surface_opt1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Vegetation
                        (including grass/shrubs/trees)</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" id="surface_opt2" value="Hard Cover : 0 %" x-model="surface_cover" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                    dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600" />
                    <label for="surface_opt2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Hard Cover
                        (including concrete/chunam)</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" id="surface_opt3" value="Bare Surface : 0 %" x-model="surface_cover" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                    dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600" />
                    <label for="surface_opt3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Bare Surface</label>
                </div>
            </div>
        </div>
        <x-line />
        <div
            x-data="{ slope_surface: '{{isset($characteristic->slope_surface) ? $characteristic->slope_surface : ''}}' }">
            <p class="font-medium text-gray-800 mb-1">
                1. Based on above, slope surface is:
            </p>
            <!-- Input Field -->
            <input type="text" placeholder="Write or choose option to fill input" name="slope_surface"
                class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                x-model="slope_surface" readonly />

            <!-- Radio Buttons -->
            <div class="mt-3">
                <div class="flex items-center mb-2">
                    <input type="radio" id="cover_opt1" value="Substantially protected (&gt; 75%)"
                        x-model="slope_surface" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                    dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600" />
                    <label for="cover_opt1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Substantially
                        protected (&gt; 75%)</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" id="cover_opt2" value="Partially protected (25% - 75%)" x-model="slope_surface"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                    dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600" />
                    <label for="cover_opt2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Partially protected
                        (25% - 75%)</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" id="cover_opt3" value="Substantially unprotected (&#60; 25)"
                        x-model="slope_surface" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                    dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600" />
                    <label for="cover_opt3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Substantially
                        unprotected (&#60; 25)</label>
                </div>
            </div>
        </div>
        <x-line />
        <div
            x-data="{ zone_of_depression: '{{isset($characteristic->zone_of_depression) ? $characteristic->zone_of_depression : ''}}' }">
            <p class="font-medium text-gray-800 mb-1">
                2. Zone(s) of depression or potential ponding exist within the crest area (within H/2):
            </p>
            <!-- Input Field -->
            <input type="text" placeholder="Write or choose option to fill input" name="zone_of_depression"
                class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                x-model="zone_of_depression" readonly />

            <!-- Radio Buttons -->
            <div class="mt-3">
                <div class="flex items-center mb-2">
                    <input type="radio" id="zone_opt1" value="Yes" x-model="zone_of_depression" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                    dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600" />
                    <label for="zone_opt1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Yes</label>
                </div>
                <div class="flex items-center mb-2">
                    <input type="radio" id="zone_opt2" value="No" x-model="zone_of_depression" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                    dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                    dark:border-gray-600" />
                    <label for="zone_opt2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No</label>
                </div>
            </div>
            <p class="text-sm text-gray-500">
                If yes, mark the extent of depression or ponding zones on plan and adopt the score of
                the next higher category in slope protection
            </p>
        </div>
        <x-line />

        <x-file-upload name="img_slope_protection" title="Slope Protection Documentation" maxFileSize="20MB"
            accept="image/png, image/jpeg, image/gif" type="image" multiple="true" maxFiles="3" notes="
                <p>Upload Documentation with Maximum : 3 Image</p>
        " />
    </div>
</div>
<x-line />

<div class="mb-3">
    <div class="mb-2">
        <label for="" class="font-bold"> Surface Drainage Provision</label>
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
                    <th scope="row" class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Crest
                    </th>
                    <td class="p-2">
                        <input type="number" step="0.01" name="crest_size"
                            value="{{isset($characteristic->crest_size) ? $characteristic->crest_size : ''}}"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <input type="number" step="0.01" name="crest_spacing" value="{{isset($characteristic->crest_spacing) ?
                        $characteristic->crest_spacing : ''}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs
                        focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <select name="crest_type"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="{{isset($characteristic->crest_type) ?
                        $characteristic->crest_type : ''}}" selected hidden>{{isset($characteristic->crest_type) ?
                                $characteristic->crest_type : 'Select..'}}</option>
                            <option>U-Channel</option>
                            <option>Step Channel</option>
                            <option>Downpipes</option>
                            <option>Ditch</option>
                        </select>
                    </td>
                    <td class="p-2">
                        <select name="crest_adequante"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="{{isset($characteristic->crest_adequante) ?
                                $characteristic->crest_adequante : ''}}" selected hidden>
                                {{isset($characteristic->crest_adequante) ?
                                $characteristic->crest_adequante : 'Y/N'}}</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>

                    <td class="p-2">
                        <input type="text" name="crest_remarks" value="{{isset($characteristic->crest_remarks) ?
                        $characteristic->crest_remarks : ''}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs
                        focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Berm
                    </th>
                    <td class="p-2">
                        <input type="number" step="0.01" name="berm_size"
                            value="{{isset($characteristic->berm_size) ? $characteristic->berm_size : ''}}"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <input type="number" step="0.01" name="berm_spacing" value="{{isset($characteristic->berm_spacing) ?
                        $characteristic->berm_spacing : ''}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs
                        focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <select name="berm_type"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="{{isset($characteristic->berm_type) ?
                        $characteristic->berm_type : ''}}" selected hidden>{{isset($characteristic->berm_type) ?
                                $characteristic->berm_type : 'Select..'}}</option>
                            <option>U-Channel</option>
                            <option>Step Channel</option>
                            <option>Downpipes</option>
                            <option>Ditch</option>
                        </select>
                    </td>
                    <td class="p-2">
                        <select name="berm_adequante"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="{{isset($characteristic->berm_adequante) ?
                                $characteristic->berm_adequante : ''}}" selected hidden>
                                {{isset($characteristic->berm_adequante) ?
                                $characteristic->berm_adequante : 'Y/N'}}</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>

                    <td class="p-2">
                        <input type="text" name="berm_remarks" value="{{isset($characteristic->berm_remarks) ?
                        $characteristic->berm_remarks : ''}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs
                        focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        On Slope
                    </th>
                    <td class="p-2">
                        <input type="number" step="0.01" name="onslope_size"
                            value="{{isset($characteristic->onslope_size) ? $characteristic->onslope_size : ''}}"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <input type="number" step="0.01" name="onslope_spacing" value="{{isset($characteristic->onslope_spacing) ?
                        $characteristic->onslope_spacing : ''}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs
                        focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <select name="onslope_type"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="{{isset($characteristic->onslope_type) ?
                        $characteristic->onslope_type : ''}}" selected hidden>{{isset($characteristic->onslope_type) ?
                                $characteristic->onslope_type : 'Select..'}}</option>
                            <option>U-Channel</option>
                            <option>Step Channel</option>
                            <option>Downpipes</option>
                            <option>Ditch</option>
                        </select>
                    </td>
                    <td class="p-2">
                        <select name="onslope_adequante"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="{{isset($characteristic->onslope_adequante) ?
                                $characteristic->onslope_adequante : ''}}" selected hidden>
                                {{isset($characteristic->onslope_adequante) ?
                                $characteristic->onslope_adequante : 'Y/N'}}</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>

                    <td class="p-2">
                        <input type="text" name="onslope_remarks" value="{{isset($characteristic->onslope_remarks) ?
                        $characteristic->onslope_remarks : ''}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs
                        focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Toe
                    </th>
                    <td class="p-2">
                        <input type="number" step="0.01" name="toe_size"
                            value="{{isset($characteristic->toe_size) ? $characteristic->toe_size : ''}}"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <input type="number" step="0.01" name="toe_spacing" value="{{isset($characteristic->toe_spacing) ?
                        $characteristic->toe_spacing : ''}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs
                        focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <select name="toe_type"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="{{isset($characteristic->toe_type) ?
                        $characteristic->toe_type : ''}}" selected hidden>{{isset($characteristic->toe_type) ?
                                $characteristic->toe_type : 'Select..'}}</option>
                            <option>U-Channel</option>
                            <option>Step Channel</option>
                            <option>Downpipes</option>
                            <option>Ditch</option>
                        </select>
                    </td>
                    <td class="p-2">
                        <select name="toe_adequante"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="{{isset($characteristic->toe_adequante) ?
                                $characteristic->toe_adequante : ''}}" selected hidden>
                                {{isset($characteristic->toe_adequante) ?
                                $characteristic->toe_adequante : 'Y/N'}}</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>

                    <td class="p-2">
                        <input type="text" name="toe_remarks" value="{{isset($characteristic->toe_remarks) ?
                        $characteristic->toe_remarks : ''}}" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs
                        focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="sm:flex">
        <div class="sm:w-1/2 mr-2">
            <div
                x-data="{ surface_drainage_provision: '{{isset($characteristic->surface_drainage_provision) ? $characteristic->surface_drainage_provision : ''}}' }">
                <!-- Input Field -->
                <input type="text" placeholder="Write or choose option to fill input" name="surface_drainage_provision"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                    x-model="surface_drainage_provision" />

                <!-- Radio Buttons -->
                <div class="mt-3">
                    <div class="flex  mb-2">
                        <input type="radio" id="sdp_opt1"
                            value="Potential surface runoff converge onto the crest area due to topography (observed or inferred from topographic plan or aerial photos)"
                            x-model="surface_drainage_provision" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="sdp_opt1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Potential
                            surface runoff converge onto the crest area due to
                            topography (observed or inferred from topographic plan or aerial
                            photos)</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="sdp_opt2" value="Slope located on a drainage line/zone of depression"
                            x-model="surface_drainage_provision" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="sdp_opt2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slope located on a
                            drainage line/zone of depression</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="sdp_opt3"
                            value="Inadequate surface drainage evident by surface erosion or erosion gully, etc."
                            x-model="surface_drainage_provision" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="sdp_opt3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Inadequate
                            surface drainage evident by surface erosion or erosion
                            gully, etc.</label>
                    </div>
                </div>
            </div>

        </div>
        <div class="sm:w-1/2">
            <x-file-upload name="img_surface_drainage_provision" title="Surface Drainage Provision Documentation"
                maxFileSize="20MB" accept="image/png, image/jpeg, image/gif" type="image" multiple="true" maxFiles="3"
                notes="
                    <p>Upload Documentation with Maximum : 3 Image</p>
            " />
        </div>
    </div>
</div>
<x-line />

<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">Hydrogeological Settings</h4>
        <p class="text-gray-400 text-xs">(Provide photographic
            records of signs of seepage
            and indicate location &
            extent on plan &
            cross-sections)</p>
    </div>
    <div>
        <div class="mb-3">
            <legend class="font-semibold mb-2">Signs of Seepage</legend>
            <div
                x-data="{above_mid_height: '{{isset($characteristic->above_mid_height) ? $characteristic->above_mid_height : ''}}', below_mid_height: '{{isset($characteristic->below_mid_height) ? $characteristic->below_mid_height : ''}}', seepage: '{{isset($characteristic->signs_of_seepage) ? $characteristic->signs_of_seepage : 'No'}}' }">
                <!-- Input Field -->
                <input type="text" placeholder="Write or choose option to fill input" name="signs_of_seepage"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                    x-model="seepage" />

                <!-- Radio Buttons -->
                <div class="mt-3">
                    <div class="flex  mb-2">
                        <input type="radio" id="signs_of_seepage1" value="Yes" x-model="seepage" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="signs_of_seepage1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Yes</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="signs_of_seepage2" value="No" x-model="seepage" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="signs_of_seepage2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No</label>
                    </div>

                </div>

                <div x-show="seepage === 'Yes'" class="mb-4">
                    <p class="mb-2">If Yes, provide following details:</p>
                    <table class="text-sm w-full bg-white border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-300 px-4 py-2 text-left">Seepage
                                    Location</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Copious</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">
                                    Trickling/damp</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Stain</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">At or above mid-height
                                </td>
                                <td class="border border-gray-300 px-4 py-2 text-center"><input
                                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        type="radio" name="above_mid_height" value="copious" x-model="above_mid_height">
                                </td>
                                <td class="border border-gray-300 px-4 py-2 text-center"><input
                                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        type="radio" name="above_mid_height" value="trickling/damp"
                                        x-model="above_mid_height">
                                </td>
                                <td class="border border-gray-300 px-4 py-2 text-center"><input
                                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        type="radio" name="above_mid_height" value="stain" x-model="above_mid_height">
                                </td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Below mid-height</td>
                                <td class="border border-gray-300 px-4 py-2 text-center"><input
                                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        type="radio" name="below_mid_height" value="copious" x-model="below_mid_height">
                                </td>
                                <td class="border border-gray-300 px-4 py-2 text-center"><input
                                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        type="radio" name="below_mid_height" value="trickling/damp"
                                        x-model="below_mid_height">
                                </td>
                                <td class="border border-gray-300 px-4 py-2 text-center"><input
                                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        type="radio" name="below_mid_height" value="stain" x-model="below_mid_height">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <x-file-upload name="img_hydrogeological_settings" title="Hydrogeological Settings Documentation"
            maxFileSize="20MB" accept="image/png, image/jpeg, image/gif" type="image" multiple="true" maxFiles="3"
            notes="
                <p>Upload Documentation with Maximum : 3 Image</p>
        " />
    </div>
</div>
<x-line />

<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">Geological Features</h4>
        <p class="text-gray-400 text-xs">(Provide photographic
            records of the site
            observations)</p>
    </div>
    <div
        x-data="{ geological_features_opt: 'No potential adverse geological features observed or recorded', otherObservation: '' }">
        <div class="mb-3">
            <legend class=" font-semibold mb-2">Presence of the following based on site
                observations or available records (please tick):</legend>
            <div
                x-data="{ geological_features: '{{isset($characteristic->geological_features) ? $characteristic->geological_features : ''}}' }">
                <!-- Input Field -->
                <input type="text" placeholder="Write or choose option to fill input" name="geological_features"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                    x-model="geological_features" />

                <!-- Radio Buttons -->
                <div class="mt-3">
                    <div class="flex  mb-2">
                        <input type="radio" id="geo_opt1"
                            value="No potential adverse geological features observed or recorded"
                            x-model="geological_features" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="geo_opt1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No potential adverse
                            geological features observed or recorded</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="geo_opt2" value="Possible relict failure (concave shaped profile)"
                            x-model="geological_features" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="geo_opt2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Possible relict
                            failure (concave shaped profile)</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="geo_opt3" value="Shear surfaces/zone" x-model="geological_features"
                            class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="geo_opt3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Shear
                            surfaces/zone</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="geo_opt4" value="Clay or silt filled discontinuities"
                            x-model="geological_features" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="geo_opt4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Clay or silt filled
                            discontinuities</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="geo_opt5" value="Slickensided discontinuities"
                            x-model="geological_features" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="geo_opt5" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slickensided
                            discontinuities</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="geo_opt6"
                            value="Discontinuities heavily coated with dark minerals or kaolinite"
                            x-model="geological_features" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="geo_opt6" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Discontinuities
                            heavily coated with dark minerals or kaolinite</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="geo_opt7" value="Significantly kaolinised granite or volcanics"
                            x-model="geological_features" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="geo_opt7" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Significantly
                            kaolinised granite or volcanics</label>
                    </div>
                    <div class="flex  mb-2">
                        <input type="radio" id="geo_opt8"
                            value="Weathered dykes/sedimentary layers within volcanic formations"
                            x-model="geological_features" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                        dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                        dark:border-gray-600" />
                        <label for="geo_opt8" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Weathered
                            dykes/sedimentary layers within volcanic formations</label>
                    </div>
                </div>
            </div>
        </div>
        <x-file-upload name="img_geological_features" title="Geological Features Documentation" maxFileSize="20MB"
            accept="image/png, image/jpeg, image/gif" type="image" multiple="true" maxFiles="3" notes="
                <p>Upload Documentation with Maximum : 3 Image</p>
        " />
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
    <div x-data="distressData()">
        <div class="mb-3">

            <div
                x-data="{ signs_of_distress: '{{ isset($characteristic->signs_of_distress) ? $characteristic->signs_of_distress : '' }}' }">
                <!-- Input Field -->
                <input type="text" placeholder="Write or choose option to fill input" name="signs_of_distress"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                    x-model="signs_of_distress" />

                <!-- Radio Buttons -->
                <div class="mt-3">
                    <div class="flex mb-2">
                        <input type="radio" id="distress1" value="No indication of any signs of distress"
                            x-model="signs_of_distress" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                dark:border-gray-600" />
                        <label for="distress1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No
                            indication of any signs of distress</label>
                    </div>
                    <div class="flex mb-2">
                        <input type="radio" id="distress2"
                            value="Reported signs of distress in inspection or maintenance records"
                            x-model="signs_of_distress" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                dark:border-gray-600" />
                        <label for="distress2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Reported
                            signs of distress in inspection or maintenance records</label>
                    </div>
                    <div class="flex mb-2">
                        <input type="radio" id="distress3" value="Observed signs of distress"
                            x-model="signs_of_distress" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                dark:border-gray-600" />
                        <label for="distress3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Observed
                            signs of distress</label>
                    </div>
                </div>

                <!-- Observed Signs of Distress Section -->
                <div x-show="signs_of_distress === 'Observed signs of distress'" class="ml-4">
                    <div class="mb-2">
                        <label for="" class="font-bold">Observed Signs of Distress :</label>
                    </div>

                    <div class="flex items-center mb-2">
                        <input id="observed_distress4" type="radio"
                            value="Large tension cracks behind crest (approx. -- mm wide)" x-model="signs_of_distress"
                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                        <label for="observed_distress4" class="ms-2 text-sm text-gray-900">Large tension cracks behind
                            crest
                            (approx. -- mm wide)
                        </label>
                    </div>

                    <div class="flex items-center mb-2">
                        <input id="observed_distress5" type="radio"
                            value="Significant distortion/damage of channels and berms" x-model="signs_of_distress"
                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                        <label for="observed_distress5" class="ms-2 text-sm text-gray-900">Significant distortion/damage
                            of
                            channels and berms</label>
                    </div>

                    <div class="flex items-center mb-2">
                        <input id="observed_distress6" type="radio"
                            value="Severe cracking and bulging of hard surfacing" x-model="signs_of_distress"
                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                        <label for="observed_distress6" class="ms-2 text-sm text-gray-900">Severe cracking and bulging
                            of hard
                            surfacing</label>
                    </div>

                    <div class="flex items-center mb-2">
                        <input id="observed_distress7" type="radio" value="Subsidence within crest area or on slope"
                            x-model="signs_of_distress"
                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                        <label for="observed_distress7" class="ms-2 text-sm text-gray-900">Subsidence within crest area
                            or on
                            slope</label>
                    </div>

                    <div class="flex items-center mb-2">
                        <input id="observed_distress8" type="radio" value="Extensive cracking of slope cover"
                            x-model="signs_of_distress"
                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                        <label for="observed_distress8" class="ms-2 text-sm text-gray-900">Extensive cracking of slope
                            cover</label>
                    </div>

                    <div class="flex items-center mb-2">
                        <input id="observed_distress9" type="radio"
                            value="Isolated minor cracking of slope cover/isolated cracking of channels"
                            x-model="signs_of_distress"
                            class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                        <label for="observed_distress9" class="ms-2 text-sm text-gray-900">Isolated minor cracking of
                            slope
                            cover/isolated cracking of channels</label>
                    </div>
                </div>
            </div>

        </div>
        <x-file-upload name="img_signs_of_distress" title="Signs of Distress Documentation" maxFileSize="20MB"
            accept="image/png, image/jpeg, image/gif" type="image" multiple="true" maxFiles="3" notes="
                <p>Upload Documentation with Maximum : 3 Image</p>
        " />
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

    <div
        x-data="{ instability_after_slope: '{{ isset($characteristic->instability_after_slope) ? $characteristic->instability_after_slope : '' }}' }">
        <!-- Input Field -->
        <input type="text" placeholder="Write or choose option to fill input" name="instability_after_slope"
            class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
            x-model="instability_after_slope" />

        <!-- Radio Buttons -->
        <div class="mt-3">
            <div class="flex mb-2">
                <input type="radio" id="inst_opt1"
                    value="No indication of any failure occurred after formation or treatment"
                    x-model="instability_after_slope" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                dark:border-gray-600" />
                <label for="inst_opt1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No indication of any
                    failure occurred after formation or treatment</label>
            </div>
            <div class="flex mb-2">
                <input type="radio" id="inst_opt2" value="Reported failure: ___" x-model="instability_after_slope"
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                dark:border-gray-600" />
                <label for="inst_opt2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Reported failure:
                    ___</label>
            </div>
            <div class="flex mb-2">
                <input type="radio" id="inst_opt3"
                    value="Possible failure scar observed at: ____ , Estimated failure volume: ____"
                    x-model="instability_after_slope" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                dark:border-gray-600" />
                <label for="inst_opt3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Possible failure scar
                    observed at: ____ , Estimated failure volume: ____</label>
            </div>
            <div class="flex mb-2">
                <input type="radio" id="inst_opt4" value="Debris observed on site/Other observations: ____"
                    x-model="instability_after_slope" class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500
                dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700
                dark:border-gray-600" />
                <label for="inst_opt4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Debris observed on
                    site/Other observations: ____</label>
            </div>
        </div>
        <x-file-upload name="img_instability_after" title="Instability after Formation/Treatment Documentation"
            maxFileSize="20MB" accept="image/png, image/jpeg, image/gif" type="image" multiple="true" maxFiles="3"
            notes="
                    <p>Upload Documentation with Maximum : 3 Image</p>
            " />
    </div>
</div>