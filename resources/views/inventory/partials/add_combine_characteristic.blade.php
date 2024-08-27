<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">Wall Type
        </h4>
    </div>
    <div x-data="{ wall_type_opt: 'Random rubble masonry wall', otherObservation: '' }">
        <div class="mb-3">
            <div class="flex flex-col space-y-2 mb-2">
                <label class="flex items-center text-sm">
                    <input type="radio" name="wall_type" value="Random rubble masonry wall" x-model="wall_type_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Random rubble masonry wall
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="wall_type" value="Brickwall " x-model="wall_type_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Brickwall
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="wall_type" value="Wall composed of lime stabilized soil"
                        x-model="wall_type_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Wall composed of lime stabilized soil
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="wall_type" value="Dry-packed dressed block or squared rubble wall "
                        x-model="wall_type_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Dry-packed dressed block or squared rubble wall
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="wall_type" value="Masonry wall other than random rubble wall"
                        x-model="wall_type_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Masonry wall other than random rubble wall
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="wall_type" value="Concrete wall (with or without masonry facing)"
                        x-model="wall_type_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Concrete wall (with or without masonry facing)
                </label>

                <label class="flex items-center text-sm">
                    <input type="radio" name="wall_type" value="Others" x-model="wall_type_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Others
                </label>
            </div>
            <input type="text" x-show="wall_type_opt === 'Others'" x-model="otherObservation"
                placeholder="Describe other observations"
                class=" p-2 w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            <input type="hidden" name="wall_type" readonly
                x-bind:value="wall_type_opt === 'Others' ? otherObservation : wall_type_opt">
        </div>
    </div>
</div>
<x-line />

<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">Base Width, <span>B<sub>W</sub></span>
        </h4>
    </div>
    <div
        x-data="{ base_width_determined_opt: 'Documentary records (Thickness Gauging/EI/MM/As-built drawings)', otherObservation: '' }">
        <div class="mb-3">
            <input type="number" step="0.01" placeholder="mm" name="base_width" required
                class="w-full p-2 mb-3 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            <div class="mb-2">
                <p class="font-medium text-gray-800">
                    Determined from :
                </p>
            </div>
            <div class="flex flex-col space-y-2 mb-2">
                <label class="flex items-center text-sm">
                    <input type="radio" name="base_width_determined"
                        value="Documentary records (Thickness Gauging/EI/MM/As-built drawings)"
                        x-model="base_width_determined_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Documentary records (Thickness Gauging/EI/MM/As-built drawings)
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="base_width_determined"
                        value="Weephole Probing (Provide field weephole probing record on Page 5)"
                        x-model="base_width_determined_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Weephole Probing (Provide field weephole probing record on Page 5) </label>

                <label class="flex items-center text-sm">
                    <input type="radio" name="base_width_determined" value="Others" x-model="base_width_determined_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Others
                </label>
            </div>
            <input type="text" x-show="base_width_determined_opt === 'Others'" x-model="otherObservation"
                placeholder="Describe other observations"
                class=" p-2 w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            <input type="hidden" name="base_width_determined" readonly
                x-bind:value="base_width_determined_opt === 'Others' ? otherObservation : base_width_determined_opt">
        </div>
    </div>
</div>
<x-line />

<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">Slope Protection</h4>

    </div>
    <div>
        <div x-data="{ surface_opt: 'Vegetation', coverPercentage: '' }" class="mb-3">
            <div class="mb-2">
                <p class="font-medium text-gray-800">
                    Surface cover with :
                </p>
            </div>

            <div class="flex items-center mb-2">
                <input type="radio" value="Vegetation" x-model="surface_opt" id="surface_cover1" name="surface_cover"
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="surface_cover1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Vegetation
                    <input type="number" step="0.01" x-show="surface_opt === 'Vegetation'" x-model="coverPercentage"
                        placeholder="%" required
                        class=" p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    <span class="ml-1">(including grass/shrubs/trees)</span></label>
            </div>

            <div class="flex items-center mb-2">
                <input type="radio" value="Hard cover" x-model="surface_opt" id="surface_cover2" name="surface_cover"
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="surface_cover2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Hard cover
                    <input type="number" step="0.01" x-show="surface_opt === 'Hard cover'" x-model="coverPercentage"
                        placeholder="%" required
                        class=" p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    <span class="ml-1">(including concrete/chunam)</span></label>
            </div>

            <div class="flex items-center mb-2">
                <input type="radio" value="Bare surface" x-model="surface_opt" id="surface_cover3" name="surface_cover"
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="surface_cover3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                    Bare surface
                    <input type="number" step="0.01" x-show="surface_opt === 'Bare surface'" x-model="coverPercentage"
                        placeholder="%" required
                        class=" p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </label>
            </div>

            <div class="flex items-center mb-2">
                <input type="radio" value="Others" x-model="surface_opt" id="surface_cover4" name="surface_cover"
                    required
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="surface_cover4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Others</label>
            </div>
            <input type="text" x-show="surface_opt === 'Others'" x-model="coverPercentage" required
                class=" p-2 w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            <input type="hidden" name="surface_cover" readonly x-bind:value="surface_opt + ' : ' + coverPercentage">
        </div>

        <div class="mb-3">
            <div class="mb-2">
                <p class="font-medium text-gray-800">
                    1. Based on above, slope surface is:
                </p>
            </div>
            <div>
                <div class="flex items-center mb-2">
                    <input id="slope_surface1" type="radio" name="slope_surface" checked
                        value="Substantially protected (>75%)"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="slope_surface1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Substantially
                        protected (>
                        75%)</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="slope_surface2" type="radio" name="slope_surface" value="Partially protected (25% - 75%)"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="slope_surface2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Partially
                        protected
                        (25% -
                        75%)</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="slope_surface3" type="radio" name="slope_surface" value="Substantially unprotected (<25)"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="slope_surface3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Substantially
                        unprotected (< 25)</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="mb-2">
                <p class="font-medium text-gray-800">
                    2. Zone(s) of depression or potential ponding exist within the crest area (within H/2):
                </p>
            </div>
            <div class="mb-2">
                <div class="flex items-center mb-2">
                    <input id="zone1" type="radio" name="zone_of_depression" value="Yes"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="zone1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Yes</label>
                </div>
                <div class="flex items-center mb-2">
                    <input id="zone2" type="radio" name="zone_of_depression" value="No" checked
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="zone2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No</label>
                </div>
                <p class="text-sm text-gray-500">
                    If yes, mark the extent of depression or ponding zones on plan and adopt the score of
                    the next higher category in slope protection
                </p>
            </div>
        </div>
        <div class="border border-gray-300 rounded-lg p-3 mb-2">
            <h2 class="font-bold text-lg mb-2">Slope Protection Documentation</h2>
            <input type="file" multiple name="img_slope_protection" class="filestyle" data-max-files="3"
                data-max-file-size="40MB" />
            <div class="">
                <p>Upload Documentation with Maximum : 3 Image</p>
            </div>
        </div>
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
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <input type="number" step="0.01" name="crest_spacing"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <select name="crest_type"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="" selected hidden>Select..</option>
                            <option>U-Channel</option>
                            <option>Step Channel</option>
                            <option>Downpipes</option>
                            <option>Ditch</option>
                        </select>

                    </td>
                    <td class="p-2">
                        <select name="crest_adequante"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="" selected hidden>Y/N</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>

                    <td class="p-2">
                        <input type="text" name="crest_remarks"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Berm
                    </th>
                    <td class="p-2">
                        <input type="number" step="0.01" name="berm_size"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <input type="number" step="0.01" name="berm_spacing"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <select name="berm_type"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="" selected hidden>Select..</option>
                            <option>U-Channel</option>
                            <option>Step Channel</option>
                            <option>Downpipes</option>
                            <option>Ditch</option>
                        </select>

                    </td>
                    <td class="p-2">
                        <select name="berm_adequante"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="" selected hidden>Y/N</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>

                    <td class="p-2">
                        <input type="text" name="berm_remarks"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        On Slope
                    </th>
                    <td class="p-2">
                        <input type="number" step="0.01" name="onslope_size"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <input type="number" step="0.01" name="onslope_spacing"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <select name="onslope_type"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="" selected hidden>Select..</option>
                            <option>U-Channel</option>
                            <option>Step Channel</option>
                            <option>Downpipes</option>
                            <option>Ditch</option>
                        </select>

                    </td>
                    <td class="p-2">
                        <select name="onslope_adequante"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="" selected hidden>Y/N</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>

                    <td class="p-2">
                        <input type="text" name="onslope_remarks"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    </td>
                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="p-2 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Toe
                    </th>
                    <td class="p-2">
                        <input type="number" step="0.01" name="toe_size"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <input type="number" step="0.01" name="toe_spacing"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

                    </td>
                    <td class="p-2">
                        <select name="toe_type"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="" selected hidden>Select..</option>
                            <option>U-Channel</option>
                            <option>Step Channel</option>
                            <option>Downpipes</option>
                            <option>Ditch</option>
                        </select>

                    </td>
                    <td class="p-2">
                        <select name="toe_adequante"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                            <option value="" selected hidden>Y/N</option>
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>

                    <td class="p-2">
                        <input type="text" name="toe_remarks"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="sm:flex">
        <div class="sm:w-1/2 mr-2" x-data="{ surface_opt: '', otherObservation: '' }">

            <div class="flex mb-2">
                <input type="radio" id="surface_drainage_provision1" name="surface_drainage_provision"
                    value="Potential surface runoff converge onto the crest area due to topography"
                    x-model="surface_opt"
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="surface_drainage_provision1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Potential
                    surface runoff converge onto the crest area due to
                    topography (observed or inferred from topographic plan or aerial
                    photos)</label>
            </div>

            <div class="flex items-center mb-2">
                <input type="radio" id="surface_drainage_provision2" name="surface_drainage_provision"
                    value="Slope located on a drainage line/zone of depression" x-model="surface_opt"
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="surface_drainage_provision2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slope
                    located
                    on a drainage line/zone of depression</label>
            </div>

            <div class="flex items-center mb-2">
                <input type="radio" id="surface_drainage_provision3" name="surface_drainage_provision"
                    value="Inadequate surface drainage evident by surface erosion or erosion gully, etc."
                    x-model="surface_opt"
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="surface_drainage_provision3"
                    class="ms-2 text-sm text-gray-900 dark:text-gray-300">Inadequate
                    surface drainage evident by surface erosion or erosion
                    gully, etc.</label>
            </div>

            <div class="flex items-center mb-2">
                <input type="radio" id="surface_drainage_provision4" name="surface_drainage_provision" value="Others"
                    x-model="surface_opt"
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="surface_drainage_provision4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Others
                    observations/records:
                </label>
            </div>
            <input type="text" x-show="surface_opt === 'Others'" x-model="otherObservation"
                placeholder="Your observation"
                class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

            <input type="hidden" name="surface_drainage_provision" readonly
                x-bind:value="surface_opt === 'Others' ? otherObservation : surface_opt">
        </div>
        <div class="sm:w-1/2 border border-gray-300 rounded-lg p-3 mb-2">
            <h2 class="font-bold text-lg mb-2">Surface Drainage Provision Documentation</h2>
            <input type="file" multiple name="img_surface_drainage_provision" class="filestyle" data-max-files="3"
                data-max-file-size="40MB" />
            <div class="">
                <p>Upload Documentation with Maximum : 3 Image</p>
            </div>
        </div>
    </div>
</div>
<x-line />

<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">Signs of Seepage
        </h4>
        <p class="text-gray-400 text-xs">(Provide photographic
            records of signs of seepage
            and indicate location &
            extent on plan &
            cross-sections)
        </p>
    </div>
    <div x-data="{ seepage: 'No', above_mid_height: '', below_mid_height: '', otherObservations: '' }">
        <div class="mb-3">
            <legend class="font-semibold mb-2">Signs of Seepage</legend>

            <div class="mb-2">
                <div class="mr-4">
                    <input id="signs_of_seepage1" type="radio" name="signs_of_seepage" value="Yes" x-model="seepage"
                        class=" w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="signs_of_seepage1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Yes</label>
                </div>
                <div class="mr-4">
                    <input id="signs_of_seepage2" type="radio" name="signs_of_seepage" value="No" x-model="seepage"
                        checked
                        class=" w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="signs_of_seepage2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No
                    </label>
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


            <div class="flex items-center mb-2">
                <input type="radio" id="other_signs" name="signs_of_seepage" value="Others" x-model="seepage"
                    class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="other_signs" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Others
                    observations/records:
                </label>
            </div>
            <input type="text" x-show="seepage === 'Others'" x-model="otherObservations"
                placeholder="Describe other observations" name="other_signs"
                class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
        <div class="border border-gray-300 rounded-lg p-3 mb-2">
            <h2 class="font-bold text-lg mb-2">Hydrogeological Settings Documentation</h2>
            <input type="file" multiple name="img_hydrogeological_settings" class="filestyle" data-max-files="3"
                data-max-file-size="40MB" />
            <div class="">
                <p>Upload Documentation with Maximum : 3 Image</p>
            </div>
        </div>
    </div>
</div>
<x-line />

<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">Water-carrying Services
        </h4>
    </div>
    <div
        x-data="{ water_carrying_services_opt: 'Exposed water main within crest area/on slope', otherObservation: '' }">
        <div class="mb-3">
            <legend class=" font-semibold mb-2">Indication of presence of water-carrying services :</legend>

            <div class="flex flex-col space-y-2 mb-2">

                <label class="flex items-center text-sm">
                    <input type="radio" name="water_carrying_services"
                        value="Exposed water main within crest area/on slope" x-model="water_carrying_services_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Exposed water main within crest area/on slope
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="water_carrying_services"
                        value="Valve(s) of water main within crest area/on slope" x-model="water_carrying_services_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Valve(s) of water main within crest area/on slope
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="water_carrying_services"
                        value="Manhole cover(s) within crest area/on slope" x-model="water_carrying_services_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Manhole cover(s) within crest area/on slope
                </label>
                <label class="flex items-center text-sm">
                    <input type="radio" name="water_carrying_services" value="Others"
                        x-model="water_carrying_services_opt"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 mr-2">
                    Others
                </label>
            </div>
            <input type="text" x-show="water_carrying_services_opt === 'Others'" x-model="otherObservation"
                placeholder="Describe other observations"
                class=" p-2 w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            <input type="hidden" name="water_carrying_services" readonly
                x-bind:value="water_carrying_services_opt === 'Others' ? otherObservation : water_carrying_services_opt">
        </div>
        <div x-data="{ leakage: 'No'}">
            <div class="mb-3">
                <legend class="font-semibold mb-2">Signs of leakage</legend>

                <div class="mb-2">
                    <div class="mr-4">
                        <input id="signs_of_leakage1" type="radio" name="signs_of_leakage" value="Yes" x-model="leakage"
                            class=" w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="signs_of_leakage1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Yes</label>
                    </div>
                    <div class="mr-4">
                        <input id="signs_of_leakage2" type="radio" name="signs_of_leakage" value="No" x-model="leakage"
                            checked
                            class=" w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="signs_of_leakage2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No
                        </label>
                    </div>
                </div>

                <div x-show="leakage === 'Yes'" class="mb-4">
                    <p class="mb-2">If Yes, indicate location and condition of leakage:</p>
                    <input type="text" placeholder="" name="leakage_location_condition"
                        class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>
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
    <div x-data="distressData()">
        <div class="mb-3">
            <div class="flex items-center mb-2">
                <input id="distress1" type="radio" name="signs_of_distress"
                    value="No indication of any signs of distress" x-model="signsOfDistress"
                    class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                <label for="distress1" class="ms-2 text-sm text-gray-900">No indication of any signs of
                    distress</label>
            </div>

            <div class="flex items-center mb-2">
                <input id="distress2" type="radio" name="signs_of_distress"
                    value="Reported signs of distress in inspection or maintenance records" x-model="signsOfDistress"
                    class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                <label for="distress2" class="ms-2 text-sm text-gray-900">Reported signs of distress in
                    inspection
                    or maintenance records</label>
            </div>

            <div class="flex items-center mb-2">
                <input id="distress3" type="radio" name="signs_of_distress" value="Observed signs of distress"
                    x-model="signsOfDistress"
                    class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                <label for="distress3" class="ms-2 text-sm text-gray-900">Observed signs of distress (please
                    tick)</label>
            </div>

            <div x-show="signsOfDistress === 'Observed signs of distress'" class="ml-4">
                <div class="mb-2">
                    <label for="" class="font-bold">Observed Signs of Distress :</label>
                </div>

                <div class="flex items-center mb-2">
                    <input id="observed_distress1" type="radio" name="signs_of_distress"
                        value="Large tension cracks behind crest" x-model="observedDistress"
                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                    <label for="observed_distress1" class="ms-2 text-sm text-gray-900">Large tension cracks
                        behind
                        crest (approx.
                        <input type="text" x-show="observedDistress === 'Large tension cracks behind crest'"
                            x-model="largeTensionCracks" placeholder="mm"
                            class="ml-1 p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500">
                        mm wide)
                    </label>
                </div>

                <div class="flex items-center mb-2">
                    <input id="observed_distress2" type="radio" name="signs_of_distress"
                        value="Significant distortion/damage of channels and berms" x-model="observedDistress"
                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                    <label for="observed_distress2" class="ms-2 text-sm text-gray-900">Significant
                        distortion/damage
                        of channels and berms</label>
                </div>

                <div class="flex items-center mb-2">
                    <input id="observed_distress3" type="radio" name="signs_of_distress"
                        value="Severe cracking and bulging of hard surfacing" x-model="observedDistress"
                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                    <label for="observed_distress3" class="ms-2 text-sm text-gray-900">Severe cracking and
                        bulging
                        of hard surfacing</label>
                </div>

                <div class="flex items-center mb-2">
                    <input id="observed_distress4" type="radio" name="signs_of_distress"
                        value="Subsidence within crest area or on slope" x-model="observedDistress"
                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                    <label for="observed_distress4" class="ms-2 text-sm text-gray-900">Subsidence within
                        crest
                        area
                        or on slope</label>
                </div>

                <div class="flex items-center mb-2">
                    <input id="observed_distress5" type="radio" name="signs_of_distress"
                        value="Extensive cracking of slope cover" x-model="observedDistress"
                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                    <label for="observed_distress5" class="ms-2 text-sm text-gray-900">Extensive cracking of
                        slope
                        cover</label>
                </div>

                <div class="flex items-center mb-2">
                    <input id="observed_distress6" type="radio" name="signs_of_distress"
                        value="Isolated minor cracking of slope cover/isolated cracking of channels"
                        x-model="observedDistress"
                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                    <label for="observed_distress6" class="ms-2 text-sm text-gray-900">Isolated minor
                        cracking
                        of
                        slope cover/isolated cracking of channels</label>
                </div>

                <div class="flex items-center mb-2">
                    <input id="observed_distress7" type="radio" name="signs_of_distress" value="Others"
                        x-model="observedDistress"
                        class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500">
                    <label for="observed_distress7" class="ms-2 text-sm text-gray-900">Others:
                    </label>
                </div>
                <input type="text" x-show="observedDistress === 'Others'" x-model="otherObservation"
                    placeholder="Please specify"
                    class="w-full p-1 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500">
            </div>
        </div>
        <input type="hidden" readonly x-model="userResponse" name="signs_of_distress">
        <div class="border border-gray-300 rounded-lg p-3 mb-2">
            <h2 class="font-bold text-lg mb-2">Signs of Distress Documentation</h2>
            <input type="file" multiple name="img_signs_of_distress" class="filestyle" data-max-files="3"
                data-max-file-size="40MB" />
            <div class="">
                <p>Upload Documentation with Maximum : 3 Image</p>
            </div>
        </div>
        <script>
            function distressData() {
            return {
                signsOfDistress: 'No indication of any signs of distress',
                observedDistress: '',
                largeTensionCracks: '',
                otherObservation: '',
                get userResponse() {
                    let response = this.signsOfDistress;
                    if (this.signsOfDistress === 'Observed signs of distress') {
                        switch (this.observedDistress) {
                            case 'Large tension cracks behind crest':
                                response += `: ${this.observedDistress} (approx. ${this.largeTensionCracks} mm wide)`;
                                break;
                            case 'Others':
                                response += `: ${this.otherObservation}`;
                                break;
                            default:
                                response += `: ${this.observedDistress}`;
                        }
                    }
                    return response;
                }
            }
        }
        </script>
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

    <div x-data="{ 
        selectedOption: 'No indication of any failure occurred after formation or treatment', 
        reportedFailure: '', 
        possibleFailureLocation: '', 
        possibleFailureVolume: '', 
        debrisObservation: '', 
        otherText: '', 
        userResponse: 'No indication of any failure occurred after formation or treatment' 
        }" @input="userResponse = generateResponse()">

        <div class="mb-3">
            <div class="flex items-center mb-2">
                <input id="instability_after1" type="radio" name="instability_after_slope"
                    value="No indication of any failure occurred after formation or treatment" x-model="selectedOption"
                    class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="instability_after1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No
                    indication of any failure occurred after formation or treatment
                </label>
            </div>

            <div class="flex items-center mb-2">
                <input id="instability_after2" type="radio" name="instability_after_slope" value="Reported failure"
                    x-model="selectedOption"
                    class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="instability_after2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Reported
                    failure:
                    <input type="text" x-show="selectedOption === 'Reported failure'" x-model="reportedFailure"
                        placeholder="Describe the failure"
                        class=" p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </label>
            </div>

            <div class="flex items-center mb-2">
                <input id="instability_after3" type="radio" name="instability_after_slope"
                    value="Possible failure scar observed" x-model="selectedOption"
                    class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="instability_after3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Possible
                    failure
                    scar
                    observed at:
                    <input type="text" x-show="selectedOption === 'Possible failure scar observed'"
                        x-model="possibleFailureLocation" placeholder="Location of the slope"
                        class=" p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    , Estimated failure volume:
                    <input type="text" x-show="selectedOption === 'Possible failure scar observed'"
                        x-model="possibleFailureVolume" placeholder="Volume in m3"
                        class=" p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </label>
            </div>

            <div class="flex items-center mb-2">
                <input id="instability_after4" type="radio" name="instability_after_slope"
                    value="Debris observed on site/Other observations" x-model="selectedOption"
                    class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="instability_after4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                    Debris
                    observed
                    on
                    site/Other observations:
                    <input type="text" x-show="selectedOption === 'Debris observed on site/Other observations'"
                        x-model="debrisObservation" placeholder="Describe the debris/observations"
                        class=" p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </label>
            </div>

            <div class="flex items-center mb-2">
                <input id="instability_after5" type="radio" name="instability_after_slope" value="Other"
                    x-model="selectedOption"
                    class="mt-0.5 w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="instability_after5" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Other:
                </label>
            </div>
            <input type="text" x-show="selectedOption === 'Other'" x-model="otherText" placeholder="Please specify"
                class=" p-2 w-full text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">

        </div>
        <input type="hidden" readonly x-model="userResponse" name="instability_after_slope">
        <div class="border border-gray-300 rounded-lg p-3 mb-2">
            <h2 class="font-bold text-lg mb-2">Instability after Formation/Treatment Documentation</h2>
            <input type="file" multiple name="img_instability_after" class="filestyle" data-max-files="3"
                data-max-file-size="40MB" />
            <div class="">
                <p>Upload Documentation with Maximum : 3 Image</p>
            </div>
        </div>

        <script>
            function generateResponse() {
            return function() {
                let response = this.selectedOption;
                
                switch(this.selectedOption) {
                    case 'Reported failure':
                        response += `: ${this.reportedFailure}`;
                        break;
                    case 'Possible failure scar observed':
                        response += ` at ${this.possibleFailureLocation}, volume: ${this.possibleFailureVolume} m3`;
                        break;
                    case 'Debris observed on site/Other observations':
                        response += `: ${this.debrisObservation}`;
                        break;
                    case 'Other':
                        response += `: ${this.otherText}`;
                        break;
                }
                
                return response;
            }
        }
        </script>
    </div>
</div>