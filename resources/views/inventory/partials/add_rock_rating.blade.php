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

<div x-data="{
    featureHeight: {{$geometry['feature_height']}},
    rockSlopeAngle: {{$geometry['rock_slope_angle']}},
    a2Value: 0,
    calculateA2() {
        this.a2Value = calculateA2(this.featureHeight, this.rockSlopeAngle);
    }
    }" x-init="calculateA2()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Geometry</legend>
        <div class="flex items-center">

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A2:</h2>
                <input type="text" id="a2_value" x-model="a2Value" name="A2" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>

    <div class="form-section mb-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Feature
                    Height:</label>
                <input type="text" id="feature_height" x-model="featureHeight" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>

            <div class="mb-2">
                <label class="block mb-1 font-medium text-gray-900 dark:text-gray-300">Rock Slope
                    Angle:</label>
                <input type="text" id="rock_slope_angle" x-model="rockSlopeAngle" readonly
                    class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>
    <script>
        function calculateA2(featureHeight, rockSlopeAngle) {
            if (featureHeight >= 20) {
                if (rockSlopeAngle > 80) return 8;
                else if (rockSlopeAngle > 70) return 7;
                else if (rockSlopeAngle > 60) return 6;
                else if (rockSlopeAngle > 45) return 5;
                else return 4;
            } else if (featureHeight >= 15) {
                if (rockSlopeAngle > 80) return 7;
                else if (rockSlopeAngle > 70) return 6;
                else if (rockSlopeAngle > 60) return 5;
                else if (rockSlopeAngle > 45) return 4;
                else return 3;
            } else if (featureHeight >= 10) {
                if (rockSlopeAngle > 80) return 6;
                else if (rockSlopeAngle > 70) return 5;
                else if (rockSlopeAngle > 60) return 4;
                else if (rockSlopeAngle > 45) return 3;
                else return 2;
            } else if (featureHeight >= 5) {
                if (rockSlopeAngle > 80) return 5;
                else if (rockSlopeAngle > 70) return 4;
                else if (rockSlopeAngle > 60) return 3;
                else return 2;
            } else {
                if (rockSlopeAngle > 80) return 4;
                else if (rockSlopeAngle > 70) return 3;
                else if (rockSlopeAngle > 60) return 2;
                else if (rockSlopeAngle > 45) return 2;
                else return 1;
            }
        }
    </script>
</div>
<x-line />

<div x-data="{
    modeOfFailure: 'Ravelling',
    scaleOfFailure: 'None',
    potentialForFailure: 0.5,
    a3aValue: 0,
    a3Value: 0,
    calculateA3a() {
        this.a3aValue = calculateA3a(this.modeOfFailure, this.scaleOfFailure);
    },
    calculateA3() {
        this.calculateA3a();
        this.a3Value = calculateA3(this.a3aValue, this.potentialForFailure);
    }
}" x-init="calculateA3()">

    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Instability Classification</legend>
        <div class="flex items-center">

            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A3:</h2>
                <input type="text" id="a3_value" x-model="a3Value" name="A3" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>
    </div>

    <h2 class="font-bold mb-2">Mode and scale of failure</h2>
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="mode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mode
                of Failure:</label>
            <select id="mode_of_failure" x-model="modeOfFailure" @change="calculateA3" name="mode_of_failure"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                <option value="Ravelling">Ravelling</option>
                <option value="Toppling">Toppling</option>
                <option value="Wedge">Wedge</option>
                <option value="Planar">Planar</option>
            </select>
        </div>
        <div>
            <label for="scale" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scale of
                Failure:</label>
            <select id="scale_of_failure" name="scale_of_failure" x-model="scaleOfFailure" @change="calculateA3"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                <option value="Large">Large (> 50 m³)</option>
                <option value="Medium">Medium (5 - 50 m³)</option>
                <option value="Small">Small (< 5 m³)</option>
                <option value="None">None</option>
            </select>
        </div>

        <div>
            <label for="pot" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Potential for
                Failure:</label>
            <select id="potential_for_failure" x-model="potentialForFailure" @change="calculateA3"
                name="potential_for_failure"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                <option value="0.5">Low potential for failure</option>
                <option value="1.0">High potential for failure</option>
            </select>
        </div>
        <div>
            <label for="a3a" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mode
                and scale of failure x Potential for failure:</label>
            <input type="text" id="a3a_value" x-model="a3aValue" readonly
                class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-lime-500 dark:focus:border-lime-500" />
        </div>

    </div>
    <script>
        function calculateA3a(mode, scale) {
            const table = {
                'Ravelling': { 'Large': 6, 'Medium': 3, 'Small': 2, 'None': 1 },
                'Toppling': { 'Large': 10, 'Medium': 6, 'Small': 3, 'None': 1 },
                'Wedge': { 'Large': 10, 'Medium': 6, 'Small': 3, 'None': 1 },
                'Planar': { 'Large': 10, 'Medium': 6, 'Small': 3, 'None': 1 }
            };
            return table[mode][scale];
        }
    
        function calculateA3(a3a, a3b) {
            return a3a * a3b;
        }
    </script>
</div>
<x-line />

<div x-data="{ A4: '0', A4_pos: ''}">
    <div class="flex justify-between items-center mb-3">
        <legend class="text-lg font-semibold">Seepage and Drainage Conditions</legend>
        <div class="flex items-center mt-4">
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
                    <th rowspan="2" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        Drainage Provision
                    </th>
                    <th colspan="3" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        Seepage
                    </th>
                </tr>
                <tr>
                    <th class="px-6 py-3 text-center border border-gray-200">
                        Heavy
                    </th>
                    <th class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        Moderate
                    </th>
                    <th class="px-6 py-3 text-center border border-gray-200">
                        Slight or none
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td
                        class="px-6 py-4 font-medium text-gray-900 bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                        Potential for convergence
                        of runoff at crest area
                        and/or potential for water
                        ingress into open
                        discontinuities
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" name="A4" value="8" @change="A4 = $event.target.value; A4_pos = '1-1'"
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        8
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        <input type="radio" name="A4" value="6" @change="A4 = $event.target.value; A4_pos = '1-2'"
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        6
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" name="A4" value="4" @change="A4 = $event.target.value; A4_pos = '1-3'"
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        4
                    </td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                        Insufficient or no drainage
                        measures in place to direct
                        water away from the crest
                        area and face of the slope
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" name="A4" value="6" @change="A4 = $event.target.value; A4_pos = '2-1'"
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        6
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        <input type="radio" name="A4" value="4" @change="A4 = $event.target.value; A4_pos = '2-2'"
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        4
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" name="A4" value="2" @change="A4 = $event.target.value; A4_pos = '2-3'"
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        2
                    </td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                        Drainage measures
                        adequately direct water
                        away from the crest area
                        and face of the slope
                    </td>
                    <td class="px-6 py-4 text-center border border-gray-200">
                        <input type="radio" name="A4" value="4" @change="A4 = $event.target.value; A4_pos = '3-1'"
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        4
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 text-center border border-gray-200">
                        <input type="radio" name="A4" value="2" @change="A4 = $event.target.value; A4_pos = '3-2'"
                            class="mr-2 mb-0.5 w-6 h-6 text-lime-600 bg-gray-100 border border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        2
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

<div x-data="actualPerformance()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Signs of Distress</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">B1 :</h2>
            <input type="text" readonly :value="B1" name="B1"
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>
    <div class="form-section mb-4">
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="10" id="act1" name="B1"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="act1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Severe</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="4" id="act2" name="B1"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="act2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Moderate</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="1" id="act3" name="B1"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="act3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Minor/None</label>
        </div>


    </div>
    <script>
        function actualPerformance() {
            return {
                B1: 0,
            }
        }
    </script>
    <hr class="h-px my-3 bg-gray-300 border-0 dark:bg-gray-700">
</div>

<div x-data="instabilityAfter()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Instability after Slope Treatment/Formation</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">B2 :</h2>
            <input type="text" readonly :value="B2" name="B2"
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>
    <div class="form-section mb-4">
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B2" value="10" id="ins1" name="B2"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="ins1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Documented evidence
                of past instability (failure volume ≥ 50 m3)</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B2" value="5" id="ins2" name="B2"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="ins2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Documented evidence
                of past instability (failure volume < 50 m3 )</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B2" value="2" id="ins3" name="B2"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="ins3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Observed evidence of
                past instability</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B2" value="1" id="ins5" name="B2"
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="ins5" class="ms-2 text-sm text-gray-900 dark:text-gray-300">No recorded or
                observed evidence of past instability</label>
        </div>
    </div>
    <script>
        function instabilityAfter() {
            return {
                B2: 0,
            }
        }
    </script>
</div>
<x-line />
<div x-data="crestHandler()">
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
            <select id="tableChoice" x-model="tableChoice" name="crest_vulnerbility"
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
</div>

<script>
    function crestHandler() {
            return {
                
                type_of_crest_facility: '{{$geometry["crest_facility_type"]}}',
                facilityGroup: '{{$geometry["crest_facility_group"]}}',
                distance: '{{$geometry["crest_d"]}}',
                height: '{{$geometry["feature_height"]}}',
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

<div x-data="toeHandler()">
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
                <select id="tableChoice" x-model="tableChoice" name="toe_vulnerbility"
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
    </div>
    <script>
        function toeHandler() {
                return {
                    type_of_toe_facility: '{{$geometry["toe_facility_type"]}}',
                    facilityGroup: '{{$geometry["toe_facility_group"]}}',
                    distance: '{{$geometry["toe_l"]}}',
                    shadowAngle: '{{$geometry["toe_w"]}}',
                    height: '{{$geometry["feature_height"]}}',
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
                            { heightRange: [0, 5], values: [0.0225, 0.0225, 0.0155, 0.01, 0.005, 0.001, 0] },
                            { heightRange: [5, 10], values: [0.1125, 0.1125, 0.0775, 0.025, 0.005, 0.0005, 0] },
                            { heightRange: [10, 15], values: [0.45, 0.45, 0.31, 0.11, 0.02, 0.002, 0] },
                            { heightRange: [15, 20], values: [0.95, 0.92, 0.7, 0.35, 0.11, 0.02, 0.002] },
                            { heightRange: [20, Infinity], values: [0.95, 0.95, 0.86, 0.59, 0.26, 0.075, 0.013] }
                        ];

                        const otherTable = [
                            { heightRange: [0, 5], values: [0.03, 0.03, 0.026, 0.016, 0.006, 0.00075, 0] },
                            { heightRange: [5, 10], values: [0.15, 0.15, 0.13, 0.08, 0.03, 0.00375, 0] },
                            { heightRange: [10, 15], values: [0.6, 0.6, 0.5, 0.3, 0.12, 0.015, 0] },
                            { heightRange: [15, 20], values: [0.95, 0.95, 0.85, 0.6, 0.2, 0.03, 0.003] },
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