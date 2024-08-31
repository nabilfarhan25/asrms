<div x-data="yearOfFormation()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Year of Formation/Treatment (Y)</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A1 :</h2>
            <input type="text" readonly :value="A1" disabled
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>

    <div class="form-section mb-4">
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="6" id="year1" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="year1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Y ≤ 1980</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="4" id="year2" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="year2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">1980 < Y ≤ 1990</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="2" id="year3" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="year3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">1990 < Y ≤ 1995</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="1" id="year4" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="year4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Y > 1995</label>
        </div>

    </div>

    <x-line />

    <div class="form-section mb-4">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Level of Geotechnical Engineering Input</legend>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A2 :</h2>
                <input type="text" readonly :value="A2" disabled
                    class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <input type="radio" x-model="A2" value="8" id="geo1" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geo1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with none or
                little geotechnical engineering input</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A2" value="6" id="geo2" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geo2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with
                indication
                of some geotechnical engineering input</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A2" value="2" id="geo3" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geo3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with
                indication
                of substantial geotechnical engineering input</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A2" value="1" id="geo4" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geo4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes checked and
                accepted by GEO</label>
        </div>

    </div>
    <script>
        function yearOfFormation() {
            return {
                A1: {{$rating->A1}},
                A2: {{$rating->A2}},
            }
        }
    </script>
</div>

<x-line />

<div x-data="classificationForm()" class="">

    <div class="form-section mb-4">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Geometry Classification</legend>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A3 :</h2>
                <input type="text" readonly :value="A3" disabled
                    class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="8" id="geometry1" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geometry1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">S1</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="4" id="geometry2" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geometry2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">S2</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="2" id="geometry3" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geometry3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">S3</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A3" value="1" id="geometry4" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="geometry4" class="ms-2 text-sm text-gray-900 dark:text-gray-300">S4</label>
        </div>
    </div>

    <script>
        function classificationForm() {
            return {
                A3: {{$rating->A3}},
            }
        }       
    </script>
</div>

<x-line />


<div x-data="{ A4: '{{$rating->A4}}', A4_pos: '{{$rating->A4_pos}}', A5: '{{$rating->A5}}', A5_pos: '{{$rating->A5_pos}}' }"
    class="">

    <div>
        <div class="flex justify-between items-center mb-2">
            <legend class="text-lg font-semibold mb-2">Slope Protection and Surface Drainage</legend>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A4 :</h2>
                <input type="text" readonly :value="A4" disabled
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
                            <input type="radio" disabled value="8" {{$rating->A4_pos == '1-1' ? 'checked' : ''}}
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300
                            focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2
                            dark:bg-gray-700 dark:border-gray-600">
                            8
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            <input type="radio" disabled value="4" {{$rating->A4_pos == '1-2' ? 'checked' : ''}}
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300
                            focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2
                            dark:bg-gray-700 dark:border-gray-600">
                            4
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" disabled value="2" {{$rating->A4_pos == '1-3' ? 'checked' : ''}}
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300
                            focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2
                            dark:bg-gray-700 dark:border-gray-600">
                            2
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                            Few or no channels
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" disabled value="4" {{$rating->A4_pos == '2-1' ? 'checked' : ''}}
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300
                            focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2
                            dark:bg-gray-700 dark:border-gray-600">
                            4
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            <input type="radio" disabled value="2" {{$rating->A4_pos == '2-2' ? 'checked' : ''}}
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300
                            focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2
                            dark:bg-gray-700 dark:border-gray-600">
                            2
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" disabled value="1.5" {{$rating->A4_pos == '2-3' ? 'checked' : ''}}
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300
                            focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2
                            dark:bg-gray-700 dark:border-gray-600">
                            1.5
                        </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                            Adequate channels
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" disabled value="2" {{$rating->A4_pos == '3-1' ? 'checked' : ''}}
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300
                            focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2
                            dark:bg-gray-700 dark:border-gray-600">
                            2
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            <input type="radio" disabled value="1.5" {{$rating->A4_pos == '3-2' ? 'checked' : ''}}
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300
                            focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2
                            dark:bg-gray-700 dark:border-gray-600">
                            1.5
                        </td>
                        <td class="px-6 py-4 text-center border border-gray-200">
                            <input type="radio" disabled value="1" {{$rating->A4_pos == '3-3' ? 'checked' : ''}}
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300
                            focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2
                            dark:bg-gray-700 dark:border-gray-600">
                            1
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <x-line />
    <div>
        <div class="flex justify-between items-center mb-2">
            <legend class="text-lg font-semibold mb-2">Site Characteristics</legend>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A5 :</h2>
                <input type="text" disabled :value="A5" readonly
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
                            Adverse
                            geological feature</th>
                        <th colspan="3"
                            class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Adverse
                            hydrogeological settings
                        </th>
                    </tr>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Significant</th>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Moderate</th>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                            Minor/None</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-200 py-2 px-4">Significant</td>
                        <td class="border border-gray-200 py-2 px-4">
                            <input type="radio" disabled
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                value="10" {{$rating->A5_pos == '1-1' ? 'checked' : ''}}> 10
                        </td>
                        <td class="border border-gray-200 py-2 px-4">
                            <input type="radio" disabled
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                value="8" {{$rating->A5_pos == '1-2' ? 'checked' : ''}}> 8
                        </td>
                        <td class="border border-gray-200 py-2 px-4">
                            <input type="radio" disabled
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                value="5" {{$rating->A5_pos == '1-3' ? 'checked' : ''}}> 5
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-200 py-2 px-4">Moderate</td>
                        <td class="border border-gray-200 py-2 px-4">
                            <input type="radio" disabled
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                value="8" {{$rating->A5_pos == '2-1' ? 'checked' : ''}}> 8
                        </td>
                        <td class="border border-gray-200 py-2 px-4">
                            <input type="radio" disabled
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                value="3" {{$rating->A5_pos == '2-2' ? 'checked' : ''}}> 3
                        </td>
                        <td class="border border-gray-200 py-2 px-4">
                            <input type="radio" disabled
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                value="2" {{$rating->A5_pos == '2-3' ? 'checked' : ''}}> 2
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-200 py-2 px-4">Minor/None</td>
                        <td class="border border-gray-200 py-2 px-4">
                            <input type="radio" disabled
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                value="5" {{$rating->A5_pos == '3-1' ? 'checked' : ''}}> 5
                        </td>
                        <td class="border border-gray-200 py-2 px-4">
                            <input type="radio" disabled
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                value="2" {{$rating->A5_pos == '3-2' ? 'checked' : ''}}> 2
                        </td>
                        <td class="border border-gray-200 py-2 px-4">
                            <input type="radio" disabled
                                class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                value="1" {{$rating->A5_pos == '3-3' ? 'checked' : ''}}> 1
                        </td>
                    </tr>
                </tbody>
            </table>
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
                <input type="text" readonly :value="B1" disabled
                    class="ml-4 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>

        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="10" id="diss1" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="diss1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                <span class="text-sm font-semibold">Severe</span>
                <span class="text-sm">(signs of slope movement)</span>
            </label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="4" id="diss2" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="diss2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                <span class="text-sm font-semibold">Moderate</span>
                <span class="text-sm">(extensive minor defects)</span>
            </label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="1" id="diss3" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="diss3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                <span class="text-sm font-semibold">Minor/None</span>
                <span class="text-sm">(none or few isolated minor defects)</span>
            </label>
        </div>

    </div>

    <script>
        function Disf() {
            return {
                B1: {{$rating->B1}},
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
            <li class="m">
                <label class="inline-flex items-center">
                    <input type="radio" value="10" x-model="B2" disabled
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <p class="ms-2">
                        <span class="text-sm">Massive failures (> 500 m3)</span>
                    </p>
                </label>
            </li>
            <li class="m">
                <label class="inline-flex items-center">
                    <input type="radio" value="5" x-model="B2" disabled
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <p class="ms-2">
                        <span class="text-sm">Major or repeated minor failures or records of
                            previous severe signs of distress</span>
                    </p>
                </label>
            </li>
            <li class="m">
                <label class="inline-flex items-center">
                    <input type="radio" value="2" x-model="B2" disabled
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <p class="ms-2">
                        <span class="text-sm">Minor failure or records of previous moderate
                            signs of distress</span>
                    </p>
                </label>
            </li>
            <li class="m">
                <label class="inline-flex items-center">
                    <input type="radio" value="1" x-model="B2" disabled
                        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <p class="ms-2">
                        <span class="text-sm">No failure or records of previous minor signs of
                            distress</span>
                    </p>
                </label>
            </li>
        </ul>

    </div>

    <script>
        function instabilityafterForm() {
            return {
                B2: {{$rating->B2}},
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
                <input type="text" id="C1" value="{{$rating->C1}}" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">C2:</h2>
                <input type="text" id="C2" value="{{$rating->C2}}" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>

    <div class="form-section mb-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Type
                    of
                    Crest Facility:</label>
                <input type="text" id="type" value="{{$geometry->crest_facility_type}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Facility
                    Group:</label>
                <input type="text" value="{{$geometry->crest_facility_group}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Distance
                    (D) from Crest
                    (m):</label>
                <input type="number" step="0.01" id="distance" value="{{$geometry->crest_d}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Feature
                    Height (H) (m):</label>
                <input type="number" step="0.01" id="height" value="{{$geometry->feature_height}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>


</div>
<x-line />

<div x-data="toeHandler()" class="">
    <div class="form-section mb-4">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Facility at Toe of Feature</legend>
            <div class="flex items-center">
                <div class="flex items-center mr-5">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D1:</h2>
                    <input type="text" id="D1" value="{{$rating->D1}}" readonly
                        class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>
                <div class="flex items-center">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D2:</h2>
                    <input type="text" id="D2" value="{{$rating->D2}}" readonly
                        class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Type
                    of Toe Facility:</label>
                <input type="text" id="type" value="{{$geometry->toe_facility_type}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Facility
                    Group:</label>
                <input type="text" value="{{$geometry->toe_facility_group}}" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Distance
                    (L) from Toe to
                    Facility (m):</label>
                <input type="number" step="0.01" readonly id="distance" value="{{$geometry->toe_l}}"
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Shadow
                    Angle (ω) from
                    Crest of Feature to Toe Facility (°):</label>
                <input type="number" step="0.01" readonly id="shadowAngle" value="{{$geometry->toe_w}}"
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

        </div>

    </div>
</div>
<x-line />

<h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Consequence To Life (CTL)
    Catergory
</h3>

<div class="inline-flex w-full p-5 text-lime-600 border border-lime-600 rounded-2xl ">
    <div class="block">
        @if ($rating->consequence_to_life == 'category-1')
        <div class="w-full text-xl font-bold mb-3">Category 1</div>
        <div class="w-full">
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting occupied buildings (e.g. residential, educational,
                commercial or industrial buildings, bus shelters, railway platforms).
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting buildings storing dangerous goods.
            </div>
        </div>
        @endif

        @if ($rating->consequence_to_life == 'category-2')
        <div class="w-full text-xl font-bold mb-3">Category 2</div>
        <div class="w-full">
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting heavily used open spaces and recreational facilities
                (e.g. sitting-out areas, playgrounds, car parks).
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting roads with high vehicular or pedestrian traffic
                density.
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting public waiting areas (e.g. bus stops , petrol
                stations).
            </div>
        </div>
        @endif

        @if ($rating->consequence_to_life == 'category-3')
        <div class="w-full text-xl font-bold mb-3">Category 3</div>
        <div class="w-full">
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting country parks and
                lightly used open-air recreation areas.
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting roads with low traffic
                density.
            </div>
            <div class="mb-2 flex">
                <span class="mr-2">&#8226;</span>
                Failures affecting storage compounds
                (non-dangerous goods).
            </div>
        </div>
        @endif

    </div>
</div>