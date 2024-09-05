<x-forms.select_ctl ctl="{{isset($rating->consequence_to_life) ? $rating->consequence_to_life : 'category-1'}}" />
<x-line />
<div x-data="levelGeotechnical()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Level of Geotechnical Engineering Input</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A1 :</h2>
            <input type="text" readonly :value="A1" name="A1"
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>

    <div class="form-section mb-4">
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="10" id="level1" name="A1"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="level1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with none
                or little geotechnical engineering input</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="3" id="level2" name="A1"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="level2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with
                indication of some geotechnical engineering input</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="1" id="level3" name="A1"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="level3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with
                indication of substantial geotechnical engineering input</label>
        </div>

    </div>
    <script>
        function levelGeotechnical() {
            return {
                A1: 0,
            }
        }
    </script>
</div>
<x-line />

<div x-data="classificationForm()" class="">

    <div class="form-section mb-4">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Classification</legend>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A2 :</h2>
                <input type="text" readonly :value="A2" name="A2"
                    class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <input type="radio" x-model="A2" value="8" id="geometry1" name="A2"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geometry1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">H<sub>e</sub>/B<sub>w</sub> >
                4.2</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A2" value="6" id="geometry2" name="A2"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geometry2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">3.5 < H<sub>
                    e</sub>/B<sub>w</sub>
                    < 4.2</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A2" value="4" id="geometry3" name="A2"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geometry3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">2.8 < H<sub>
                    e</sub>/B<sub>w</sub>
                    < 3.5</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A2" value="2" id="geometry4" name="A2"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geometry4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">2.0 < H<sub>
                    e</sub>/B<sub>w</sub>
                    < 2.8</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A2" value="1" id="geometry5" name="A2"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geometry5" class="ms-2 text-sm text-gray-900 dark:text-gray-300">H<sub>e</sub>/B<sub>w</sub>
                < 2.0</label>
        </div>
    </div>

    <script>
        function classificationForm() {
            return {
                A2: 0,
            }
        }       
    </script>
</div>

<x-line />

<div x-data="wallForm()" class="">

    <div class="form-section mb-4">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Wall Type </legend>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A3 :</h2>
                <input type="text" readonly :value="A3" name="A3"
                    class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="8" id="wall1" name="A3"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="wall1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Random rubble masonry wall
                (with or without pointing, ties or
                horizontal beams)</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="5" id="wall2" name="A3"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="wall2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Wall composed of
                lime-stabilised soils</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="5" id="wall3" name="A3"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="wall3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Brick Wall</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="5" id="wall4" name="A3"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="wall4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Dry packed dressed
                block/squared rubble wall without ties</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="5" id="wall5" name="A3"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="wall5" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Dry packed dressed block/squared
                rubble wall with ties</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="3" id="wall6" name="A3"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="wall6" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Any type of masonry wall
                (except for random rubble walls) with
                horizontal beams made of lime-stabilised soil or brick</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="3" id="wall7" name="A3"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="wall7" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Any type of masonry wall (except
                for random rubble walls) with
                concrete horizontal beams
            </label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="1" id="wall8" name="A3"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="wall8" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Masonry facing to concrete
                wall</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="1" id="wall9" name="A3"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="wall9" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Concrete wall
            </label>
        </div>
    </div>

    <script>
        function wallForm() {
            return {
                A3: 0,
            }
        }       
    </script>
</div>

<x-line />


<div x-data="{ A4: '0', A4_pos: '', A5: '0', A5_pos: '' }" class="">

    <div>
        <div class="flex justify-between items-center mb-2">
            <legend class="text-lg font-semibold mb-2">Slope Protection and Surface Drainage</legend>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A4 :</h2>
                <input type="text" readonly :value="A4" name="A4"
                    class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
        <div class=" dark:border-gray-700 sm:rounded-lg">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-collapse border border-gray-200 dark:border-gray-700">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th rowspan="2"
                            class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Surface Drainage
                        </th>
                        <th colspan="3"
                            class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Slope Protection
                        </th>
                    </tr>
                    <tr>
                        <th class="px-6 py-3 text-center border border-gray-200">
                            Substantially Unprotected
                        </th>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Partially Protected
                        </th>
                        <th class="px-6 py-3 text-center border border-gray-200">
                            Substantially Protected
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td
                            class="px-6 py-4 font-medium text-gray-900 bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                            Few or no channels, and potential for convergent flow of surface water above
                            crest or located on a drainage line or depression
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A4" value="8" @change="A4 = $event.target.value; A4_pos = '1-1'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            8
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            <input type="radio" name="A4" value="4" @change="A4 = $event.target.value; A4_pos = '1-2'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            4
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A4" value="2" @change="A4 = $event.target.value; A4_pos = '1-3'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            2
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                            Few or no channels
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A4" value="4" @change="A4 = $event.target.value; A4_pos = '2-1'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            4
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            <input type="radio" name="A4" value="2" @change="A4 = $event.target.value; A4_pos = '2-2'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            2
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A4" value="1.5" @change="A4 = $event.target.value; A4_pos = '2-3'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            1.5
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                            Adequate channels
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A4" value="2" @change="A4 = $event.target.value; A4_pos = '3-1'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            2
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            <input type="radio" name="A4" value="1.5" @change="A4 = $event.target.value; A4_pos = '3-2'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            1.5
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A4" value="1" @change="A4 = $event.target.value; A4_pos = '3-3'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            1
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" readonly :value="A4_pos" name="A4_pos"
                class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>
    <x-line />
    <div>
        <div class="flex justify-between items-center mb-2">
            <legend class="text-lg font-semibold mb-2">Signs of Seepage and Leaky Water-Carrying Services
            </legend>
            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A5 :</h2>
                <input type="text" name="A5" x-bind:value="A5" readonly
                    class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
        <div class=" dark:border-gray-700 sm:rounded-lg">
            <table
                class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border-collapse border border-gray-200 dark:border-gray-700">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th rowspan="2"
                            class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Signs of Seepage
                        </th>
                        <th colspan="3"
                            class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Water-carrying
                            Services
                        </th>
                    </tr>
                    <tr>
                        <th class="px-6 py-3 text-center border border-gray-200">
                            Presence of potentially
                            leaky services & signs
                            of leakage noted
                        </th>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Presence of potentially
                            leaky services but no
                            signs of leakage noted
                        </th>
                        <th class="px-6 py-3 text-center border border-gray-200">
                            No potentially
                            leaky services
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td
                            class="px-6 py-4 font-medium text-gray-900 bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                            Seepage at mid-height or above
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A5" value="8" @change="A5 = $event.target.value; A5_pos = '1-1'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            8
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            <input type="radio" name="A5" value="4" @change="A5 = $event.target.value; A5_pos = '1-2'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            4
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A5" value="2" @change="A5 = $event.target.value; A5_pos = '1-3'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            2
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                            Seepage below mid-height
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A5" value="4" @change="A5 = $event.target.value; A5_pos = '2-1'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            4
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            <input type="radio" name="A5" value="2" @change="A5 = $event.target.value; A5_pos = '2-2'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            2
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A5" value="1.5" @change="A5 = $event.target.value; A5_pos = '2-3'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            1.5
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                            No signs of seepage
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A5" value="2" @change="A5 = $event.target.value; A5_pos = '3-1'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            2
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            <input type="radio" name="A5" value="1.5" @change="A5 = $event.target.value; A5_pos = '3-2'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            1.5
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" name="A5" value="1" @change="A5 = $event.target.value; A5_pos = '3-3'"
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            1
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" name="A5_pos" x-bind:value="A5_pos" readonly>
        </div>
    </div>

</div>
<x-line />


<div x-data="Disf()" class="">

    <div class="form-section mb-4">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Signs of Distress</legend>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">B1 :</h2>
                <input type="text" readonly :value="B1" name="B1"
                    class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="10" id="diss1" name="B1"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="diss1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                <span class="text-sm font-semibold">Severe</span>
                <span class="text-sm">(Advanced stage of severe deformation and/or distress or
                    onset of severe deformation and/or distress)
                </span>
            </label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="4" id="diss2" name="B1"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="diss2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                <span class="text-sm font-semibold">Moderate</span>
                <span class="text-sm">(Moderate deformation and/or distress)</span>
            </label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="1" id="diss3" name="B1"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="diss3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                <span class="text-sm font-semibold">Minor/None</span>
                <span class="text-sm">(Minimal deformation and distress)</span>
            </label>
        </div>
        <small>For a wall of the slenderness ratio, He
            /Bw > 5 or a dry packed random
            rubble wall with Hw > 5 m, accord B1 = 10</small>
    </div>

    <script>
        function Disf() {
            return {
                B1: 0,
            }
        }       
    </script>
</div>
<x-line />

<div x-data="instabilityafterForm()" class="">
    <div class="form-section mb-4">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Instability after Slope
                Formation/Treatment</legend>
            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">B2 :</h2>
                <input type="text" readonly :value="B2" name="B2"
                    class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>

        <ul>
            <li class="mb-2" x-on:click="B2 = 10">
                <label class="inline-flex items-center">
                    <input type="radio"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <p class="ms-2">
                        <span class="text-sm">Major (full-height failure) </span>
                    </p>
                </label>
            </li>
            <li class="mb-2" x-on:click="B2 = 5">
                <label class="inline-flex items-center">
                    <input type="radio"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <p class="ms-2">
                        <span class="text-sm">Multiple part-height or structural failures, or
                            records of previous severe signs of distress
                        </span>
                    </p>
                </label>
            </li>
            <li class="mb-2" x-on:click="B2 = 2">
                <label class="inline-flex items-center">
                    <input type="radio"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <p class="ms-2">
                        <span class="text-sm">Part-height or structural failures, or
                            records of previous moderate signs of distress</span>
                    </p>
                </label>
            </li>
            <li class="mb-2" x-on:click="B2 = 1">
                <label class="inline-flex items-center">
                    <input type="radio"
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <p class="ms-2">
                        <span class="text-sm">No failure nor records of previous signs of distress </span>
                    </p>
                </label>
            </li>
        </ul>

    </div>

    <script>
        function instabilityafterForm() {
    return {
        B2: 0,
    }
}
    </script>
</div>
<x-line />

<div x-data="crestHandler()" class="">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Facilities Above Crest of Feature</legend>
        <div class="flex items-center">
            <div class="flex items-center mr-5">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">C1:</h2>
                <input type="text" id="C1" x-bind:value="C1" name="C1" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">C2:</h2>
                <input type="text" id="C2" x-bind:value="C2" name="C2" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>
    <div class="form-section mb-2">
        <div class="flex items-center">
            <label class="block mr-3 font-medium text-gray-900 dark:text-gray-300">Vulnerability
                Factor
                (C2) for Crest Facility :</label>
            <select id="tableChoice" x-model="tableChoice" name="crest_vulnerability"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                <option value="buildings">Buildings</option>
                <option value="other">Other than Buildings</option>
            </select>
        </div>
    </div>

    <div class="form-section mb-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Type
                    of
                    Crest Facility:</label>
                <input type="text" id="type" x-model="type_of_crest_facility" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Facility
                    Group:</label>
                <input type="text" x-model="facilityGroup" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Distance
                    (D) from Crest
                    (m):</label>
                <input type="number" step="0.01" id="distance" x-model="distance" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Feature
                    Height (H) (m):</label>
                <input type="number" step="0.01" id="height" x-model="height" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>

    <script>
        function crestHandler() {
        return {
    
            type_of_crest_facility: '{{$geometry["crest_facility_type"];}}',
            facilityGroup: '{{$geometry["crest_facility_group"];}}',
            distance: '{{$geometry["crest_d"];}}',
            height: '{{$geometry["feature_height"];}}',
            tableChoice: 'buildings',
            get C1() {
                const C1_values = {
                    '1(a)': 9,
                    '1(b)': 3,
                    '2(a)': 2,
                    '2(b)': 1,
                    '3': 0.25,
                    '4': 0.002,
                    '5': 0.0002,
                };
                return C1_values[this.facilityGroup] || 0;
                            },
                            get C2() {
                                const distance = parseFloat(this.distance);
                                const height = parseFloat(this.height);
    
                                // Table for Buildings
                                const buildingsTable = [
                                    { heightRange: [0, 5], values: [0, 0.0000125, 0.0003] },
                                    { heightRange: [5, 10], values: [0, 0.0000625, 0.0015] },
                                    { heightRange: [10, 15], values: [0, 0.00025, 0.006] },
                                    { heightRange: [15, 20], values: [0.0002, 0.003, 0.02] },
                                    { heightRange: [20, Infinity], values: [0.0005, 0.01, 0.05] }
                                ];
    
                                // Table for other than Buildings
                                const otherTable = [
                                    { heightRange: [0, 5], values: [0, 0.00025, 0.0075] },
                                    { heightRange: [5, 10], values: [0, 0.00125, 0.0375] },
                                    { heightRange: [10, 15], values: [0, 0.005, 0.15] },
                                    { heightRange: [15, 20], values: [0.002, 0.04, 0.4] },
                                    { heightRange: [20, Infinity], values: [0.002, 0.074, 0.54] }
                                ];
    
                                // Select the table to use based on user's choice
                                const selectedTable = this.tableChoice === 'buildings' ? buildingsTable : otherTable;
    
                                // Find the correct row based on height
                                const row = selectedTable.find(row => height >= row.heightRange[0] && height < row.heightRange[1]);
    
                                // Determine the distance range and corresponding value
                                if (distance >= 10) {
                                    return 0;
                                } else if (distance >= 6) {
                                    return row.values[0];
                                } else if (distance >= 3) {
                                    return row.values[1];
                                } else {
                                    return row.values[2];
                                }
                            }
                        };
                        }
    </script>

</div>
<x-line />

<div x-data="toeHandler()" class="">
    <div class="form-section mb-4">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Facility at Toe of Feature</legend>
            <div class="flex items-center">
                <div class="flex items-center mr-5">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D1:</h2>
                    <input type="text" id="D1" x-bind:value="D1" name="D1" readonly
                        class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>
                <div class="flex items-center">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D2:</h2>
                    <input type="text" id="D2" x-bind:value="D2" name="D2" readonly
                        class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>
            </div>
        </div>



        <div class="form-section mb-2">
            <div class="flex items-center">
                <label class="block mr-3 font-medium text-gray-900 dark:text-gray-300">Vulnerability
                    Factor (D2) for Toe Facility:</label>
                <select id="tableChoice" x-model="tableChoice" name="toe_vulnerability"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                    <option value="buildings">Buildings</option>
                    <option value="other">Other than Buildings</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Type
                    of Toe Facility:</label>
                <input type="text" id="type" x-model="type_of_toe_facility" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Facility
                    Group:</label>
                <input type="text" x-model="facilityGroup" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Distance
                    (L) from Toe to
                    Facility (m):</label>
                <input type="number" step="0.01" readonly id="distance" x-model="distance"
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Shadow
                    Angle (ω) from
                    Crest of Feature to Toe Facility (°):</label>
                <input type="number" step="0.01" readonly id="shadowAngle" x-model="shadowAngle"
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Feature
                    Height (H) (m):</label>
                <input type="number" step="0.01" readonly id="height" x-model="height"
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

        </div>
        <script>
            function toeHandler() {
            return {
                type_of_toe_facility: '{{$geometry["toe_facility_type"];}}',
                facilityGroup: '{{$geometry["toe_facility_group"];}}',
                distance: '{{$geometry["toe_l"];}}',
                shadowAngle: '{{$geometry["toe_w"];}}',
                height: '{{$geometry["feature_height"];}}',
                tableChoice: 'buildings',
                get D1() {
                    const D1_values = {
                        '1(a)': 9,
                        '1(b)': 3,
                        '2(a)': 2,
                        '2(b)': 1,
                        '3': 0.25,
                        '4': 0.002,
                        '5': 0.0002,
                    };
                    return D1_values[this.facilityGroup] || 0;
                },
                get D2() {
                    const shadowAngle = parseFloat(this.shadowAngle);
                    const height = parseFloat(this.height);
    
                    const angleRanges = [
                        { min: 50, max: Infinity },
                        { min: 45, max: 50 },
                        { min: 40, max: 45 },
                        { min: 35, max: 40 },
                        { min: 30, max: 35 },
                        { min: 25, max: 30 },
                        { min: 20, max: 25 },
                    ];
    
                    const buildingsTable = [
                        { heightRange: [0, 5], values: [0.0225, 0.0225, 0.0155, 0.005, 0.001, 0.0001, 0] },
                        { heightRange: [5, 10], values: [0.1125, 0.1125, 0.0775, 0.025, 0.005, 0.0005, 0] },
                        { heightRange: [10, 15], values: [0.45, 0.45, 0.31, 0.10, 0.02, 0.002, 0] },
                        { heightRange: [15, 20], values: [0.95, 0.92, 0.70, 0.35, 0.11, 0.02, 0] },
                        { heightRange: [20, Infinity], values: [0.95, 0.95, 0.86, 0.59, 0.26, 0.075, 0.013] }
                    ];
    
                    const otherTable = [
                        { heightRange: [0, 5], values: [0.03, 0.03, 0.026, 0.016, 0.006, 0.00075, 0] },
                        { heightRange: [5, 10], values: [0.150, 0.150, 0.130, 0.08, 0.030, 0.00375, 0] },
                        { heightRange: [10, 15], values: [0.60, 0.60, 0.52, 0.32, 0.12, 0.015, 0] },
                        { heightRange: [15, 20], values: [0.95, 0.92, 0.92, 0.70, 0.49, 0.08, 0] },
                        { heightRange: [20, Infinity], values: [0.95, 0.95, 0.95, 0.86, 0.59, 0.25, 0.03] }
                    ];
    
                    const selectedTable = this.tableChoice === 'buildings' ? buildingsTable : otherTable;
    
                    const row = selectedTable.find(row => height >= row.heightRange[0] && height < row.heightRange[1]);
    
                    const angleRange = angleRanges.find(range => shadowAngle > range.min && shadowAngle <= range.max);
    
                    const angleIndex = angleRanges.indexOf(angleRange);
    
                    return row.values[angleIndex] || 0;
                }
            };
        }
        </script>
    </div>
</div>