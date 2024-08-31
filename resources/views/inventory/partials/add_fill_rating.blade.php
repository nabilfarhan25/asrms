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

<div x-data="calculationComponent()">
    <!-- A2 Calculation -->
    <div class="flex justify-between items-center mb-5">
        <legend class="text-lg font-semibold mb-2">Sliding and Minor Washout Failure</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A2 :</h2>
            <input type="text" readonly :value="A2" name="A2"
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2">
        <!-- Geometry -->
        <div class="mb-5">
            <label for="geometry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Geometry (From
                Figure C1)</label>
            <select x-model="A2a" @change="calculateA2" name="geometry"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                id="geometry">
                <option value="32">S1</option>
                <option value="16">S2</option>
                <option value="8">S3</option>
                <option value="4">S4</option>
                <option value="2">S5</option>
                <option value="1">S6</option>
            </select>
        </div>

        <!-- Type of Surface Cover -->
        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of
                Surface Cover</label>
            <select x-model="A2b" @change="calculateA2" name="type_of_surface_cover"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                id="surface_cover">
                <option value="4">Bare</option>
                <option value="3">Vegetated</option>
                <option value="1.5">Chunam</option>
                <option value="1">Shotcrete</option>
            </select>
        </div>

        <!-- Surface Drainage Provision -->
        <div class="mb-5">
            <label for="surface_drain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surface
                Drainage Provision</label>
            <select x-model="A2c" @change="calculateA2" name="surface_drainage_provision"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                id="surface_drain">
                <option value="2">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <!-- Signs of Seepage -->
        <div class="mb-5">
            <label for="signs_of_seepage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Signs of
                Seepage</label>
            <select x-model="A2d" @change="calculateA2" name="signs_of_seepage"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                id="signs_of_seepage">
                <option value="2">Yes</option>
                <option value="1">No</option>
            </select>
        </div>

        <!-- Potential Leaking Water-carrying Services -->
        <div class="mb-5">
            <label for="potential" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Potential
                Leaking Water-carrying Services</label>
            <select x-model="A2e" @change="calculateA2" name="potential_leaking"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                id="potential">
                <option value="2">Leaking</option>
                <option value="1.5">Presence</option>
                <option value="1">None</option>
            </select>
        </div>
    </div>
    <x-line />
    <!-- A3 Calculation -->
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Liquefaction Failure</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A3 :</h2>
            <input type="text" readonly :value="A3" name="A3"
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2">
        <!-- Feature Height -->
        <div class="mb-5">
            <label for="feature_height" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Feature
                Height, H (m)</label>
            <select x-model="A3a" @change="calculateA3" name="feature_height"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                id="feature_height">
                <option value="4">H ≥ 30</option>
                <option value="3">20 ≥ H < 30</option>
                <option value="1">10 ≥ H < 20</option>
                <option value="0.5">H < 10</option>
            </select>
        </div>

        <!-- Type of Surface Cover -->
        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of
                Surface Cover</label>
            <select x-model="A3b" @change="calculateA3" name="surface_cover"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                id="surface_cover">
                <option value="1.3">Bare</option>
                <option value="1.1">Vegetated</option>
                <option value="0.5">Chunam</option>
                <option value="0.25">Shotcrete</option>
            </select>
        </div>
    </div>


    <x-line />
    <div x-data="calculateA4()">
        <div class="flex justify-between items-center">
            <legend class="text-lg font-semibold mb-2">Catchment Characteristics: Topographic Setting and Size of
                Catchment
            </legend>
            <div class="flex items-center">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A4 :</h2>
                <input type="text" readonly :value="A4" name="A4"
                    class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-2">
            <div>
                <div class="mb-5">
                    <label for="topographicSetting"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topographic Setting</label>
                    <select x-model="topographicSetting" id="topographicSetting" name="topograhic_setting"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light">
                        <option value="0">Traverse Drainage Line</option>
                        <option value="1">Adjacent to Drainage Line</option>
                        <option value="2">Traverse Topographic Depression</option>
                        <option value="3">Adjacent to Topographic Depression</option>
                        <option value="4">Planar Slope</option>
                        <option value="5">Spur</option>
                    </select>
                </div>

                <div class="mb-5">
                    <label for="catchmentSize" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size
                        of
                        Catchment (m²)</label>
                    <select x-model="catchmentSize" id="catchmentSize" name="catchment_size"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light">
                        <option value="0">&#8804; 100</option>
                        <option value="1">100 - 500</option>
                        <option value="2">500 - 1000</option>
                        <option value="3">1000 - 10000</option>
                        <option value="4">&gt; 10000</option>
                    </select>
                </div>
            </div>

            <!-- Additional Factors -->
            <div class="grid grid-cols-2 gap-2">
                <!-- Type of Crest Facility -->
                <div class="mb-5">
                    <label for="type_of_crest_facility"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Crest
                        Facility</label>
                    <select x-model="A4b" name="type_of_crest"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light">
                        <option value="1.0">Road</option>
                        <option value="0.5">Platform & Urban Development</option>
                        <option value="0.25">Catch-Water</option>
                        <option value="0.10">Minor Development e.g. Rural Footpath</option>
                        <option value="0.05">Natural Hillside</option>
                    </select>
                </div>

                <!-- Volume of Fill Body -->
                <div class="mb-5">
                    <label for="volume_of_fill_body"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Volume of Fill Body
                        (m³)</label>
                    <select x-model="A4c" name="volume_of_fill_body"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light">
                        <option value="0.10">≤ 100</option>
                        <option value="0.25">100 - 500</option>
                        <option value="0.5">500 - 1000</option>
                        <option value="1">1000 - 10000</option>
                        <option value="2">> 10000</option>
                    </select>
                </div>

                <!-- Channelisation of Debris -->
                <div class="mb-5">
                    <label for="channelisation_of_debris"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Channelisation of
                        Debris</label>
                    <select x-model="A4d" name="channelisation_of_debris"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light">
                        <option value="0.5">No</option>
                        <option value="2.0">Yes</option>
                    </select>
                </div>

                <!-- Erosion and Entrainment along Debris Trail -->
                <div class="mb-5">
                    <label for="erosion_along_debris_trail"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Erosion and Entrainment
                        along
                        Debris Trail</label>
                    <select x-model="A4e" name="erosion_and_entertainment"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light">
                        <option value="1.0">No</option>
                        <option value="2.0">Yes</option>
                    </select>
                </div>

                <!-- Spread of Debris -->
                <div class="mb-5">
                    <label for="spread_of_debris"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spread of Debris</label>
                    <select x-model="A4f" name="spread_of_debris"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light">
                        <option value="1.0">No</option>
                        <option value="0.5">Yes</option>
                    </select>
                </div>

                <!-- Unstable Terrain -->
                <div class="mb-5">
                    <label for="unstable_terrain"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unstable Terrain</label>
                    <select x-model="A4g" name="unstable_terrain"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light">
                        <option value="1.0">No</option>
                        <option value="2.0">Yes</option>
                    </select>
                </div>

                <!-- Masonry Wall at Crest -->
                <div class="mb-5">
                    <label for="masonry_wall_at_crest"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masonry Wall at
                        Crest</label>
                    <select x-model="A4h" name="masonry_wall_at_crest"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light">
                        <option value="1.0">No Masonry Wall </option>
                        <option value="2.0">Wall Height &#8805; 3 m</option>
                        <option value="1.5">Wall Height < 3 m</option>

                    </select>
                </div>
            </div>
        </div>
    </div>

    <script>
        function calculationComponent() {
            return {
                // A2 Variables
                A2a: 32,
                A2b: 4,
                A2c: 2,
                A2d: 2,
                A2e: 2,
                // A3 Variables
                A3a: 4,
                A3b: 1.3,
                // Computed A2
                get A2() {
                    return this.A2a * this.A2b * this.A2c * this.A2d * this.A2e;
                },
                // Computed A3
                get A3() {
                    return 0.25 * this.A2 * this.A3a * this.A3b;
                },
                // Recalculate A2 when a component changes
                calculateA2() {
                    this.A2;
                },
                // Recalculate A3 when a component changes
                calculateA3() {
                    this.A3;
                }
            }
        }
    </script>
    <script>
        function calculateA4() {
            return {
                // Factors
                topographicSetting: 0, // Default to Traverse Drainage Line
                catchmentSize: 0, // Default to ≤ 100
                A4b: 1.0,
                A4c: 0.1,
                A4d: 0.5,
                A4e: 1.0,
                A4f: 1.0,
                A4g: 1.0,
                A4h: 1.0,
    
                // Table data matching the table you provided
                table: [
                    [2, 4, 8, 16, 32],  // Traverse Drainage Line
                    [2, 3, 6, 12, 24],  // Adjacent to Drainage Line
                    [1, 2, 4, 8, 16],   // Traverse Topographic Depression
                    [1, 2, 3, 6, 12],   // Adjacent to Topographic Depression
                    [0.5, 1, 3, 5, 10], // Planar Slope
                    [0.5, 1, 2, 4, 8]   // Spur
                ],
    
                // Calculate A4a based on Topographic Setting and Catchment Size
                get A4a() {
                    return this.table[this.topographicSetting][this.catchmentSize];
                },
    
                // Calculate A4 based on all factors
                get A4() {
                    return Math.pow(this.A2, 1/3) * this.A4a * this.A4b * this.A4c * this.A4d * this.A4e * this.A4f * this.A4g * this.A4h;
                }
            }
        }
    </script>

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
        <div class="flex items-center mb-5">
            <div class="flex items-center mr-5">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">C1:</h2>
                <input type="text" id="C1" x-bind:value="C1" name="C1" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>


            <div class="flex items-center mr-5">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">C2<sub>1</sub>:</h2>
                <input type="text" id="C21" x-bind:value="C2" name="C21" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
            <div class="flex items-center mr-5">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">C2<sub>2</sub>:</h2>
                <input type="text" id="C22" x-bind:value="C2" name="C22" readonly
                    class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
            </div>
            <div class="flex items-center mr-5">
                <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">C2<sub>3</sub>:</h2>
                <input type="text" id="C23" x-bind:value="C23" name="C23" readonly
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
                            },
                            
                            get C23() {
                                const distance = parseFloat(this.distance);
                                const height = parseFloat(this.height);

                                // Table for Buildings
                                const buildingsTable = [
                                    { heightRange: [0, 5], values: [0, 0.00023 , 0.0023 ] },
                                    { heightRange: [5, 10], values: [0, 0.00115, 0.0115 ] },
                                    { heightRange: [10, 15], values: [0, 0.00715, 0.0375] },
                                    { heightRange: [15, 20], values: [0.008, 0.0285, 0.101] },
                                    { heightRange: [20, Infinity], values: [0.015, 0.045, 0.15] }
                                ];

                                // Table for other than Buildings
                                const otherTable = [
                                    { heightRange: [0, 5], values: [0, 0.0022, 0.011] },
                                    { heightRange: [5, 10], values: [0, 0.011, 0.055] },
                                    { heightRange: [10, 15], values: [0, 0.043, 0.18] },
                                    { heightRange: [15, 20], values: [0.004, 0.092, 0.2825] },
                                    { heightRange: [20, Infinity], values: [0.006, 0.12, 0.315] }
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
<x-line />
<div x-data="toeHandler()">
    <div class="form-section mb-4">
        <div class="flex justify-between items-center mb-5">
            <legend class="text-lg font-semibold mb-2">Facility at Toe of Feature</legend>
            <div class="flex items-center">
                <div class="flex items-center mr-5">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D1:</h2>
                    <input type="text" id="D1" x-bind:value="D1" name="D1" readonly
                        class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>
                <div class="flex items-center mr-5">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D2<sub>1</sub>:</h2>
                    <input type="text" id="D21" x-bind:value="D21" name="D21" readonly
                        class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>

                <div class="flex items-center mr-5">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D2<sub>2</sub>:</h2>
                    <input type="text" id="D22" x-bind:value="D22" name="D22" readonly
                        class="p-2 ml-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </div>

                <div class="flex items-center">
                    <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">D2<sub>3</sub>:</h2>
                    <input type="text" id="D23" x-bind:value="D23" name="D23" readonly
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
                get D21() {
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
                        { min: 15, max: 20 },
                        { min: 10, max: 15 },
                    ];

                    const buildingsTable = [
                        { heightRange: [0, 5], values: [0.0225, 0.0225, 0.0155, 0.005, 0.001, 0.0001, 0, 0, 0] },
                        { heightRange: [5, 10], values: [0.1125, 0.1125, 0.0775, 0.025, 0.005, 0.0005, 0, 0, 0] },
                        { heightRange: [10, 15], values: [0.45, 0.45, 0.31, 0.11, 0.02, 0.002, 0, 0, 0] },
                        { heightRange: [15, 20], values: [0.95, 0.92, 0.7, 0.35, 0.11, 0.02, 0, 0, 0] },
                        { heightRange: [20, Infinity], values: [0.95, 0.95, 0.86, 0.59, 0.26, 0.075, 0.013, 0, 0] }
                    ];

                    const otherTable = [
                        { heightRange: [0, 5], values: [0.03, 0.03, 0.026, 0.016, 0.006, 0.00075, 0, 0, 0] },
                        { heightRange: [5, 10], values: [0.15, 0.15, 0.13, 0.08, 0.03, 0.00375, 0, 0, 0] },
                        { heightRange: [10, 15], values: [0.6, 0.6, 0.52, 0.32, 0.12, 0.015, 0, 0, 0] },
                        { heightRange: [15, 20], values: [0.95, 0.92, 0.92, 0.70, 0.49, 0.08, 0, 0, 0] },
                        { heightRange: [20, Infinity], values: [0.95, 0.95, 0.95, 0.86, 0.59, 0.25, 0.03, 0, 0] }
                    ];

                    const selectedTable = this.tableChoice === 'buildings' ? buildingsTable : otherTable;

                    const row = selectedTable.find(row => height >= row.heightRange[0] && height < row.heightRange[1]);

                    const angleRange = angleRanges.find(range => shadowAngle > range.min && shadowAngle <= range.max);

                    const angleIndex = angleRanges.indexOf(angleRange);

                    return row.values[angleIndex] || 0;
                },

                get D22() {
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
                        { min: 15, max: 20 },
                        { min: 10, max: 15 },
                    ];

                    const buildingsTable = [
                        { heightRange: [0, 5], values: [0.0225, 0.0225, 0.0225, 0.0155, 0.005, 0.001, 0.0001, 0, 0] },
                        { heightRange: [5, 10], values: [0.1125, 0.1125, 0.1125, 0.0775, 0.025, 0.005, 0.0005, 0, 0] },
                        { heightRange: [10, 15], values: [0.45, 0.45, 0.45, 0.31, 0.10, 0.02, 0.002, 0, 0] },
                        { heightRange: [15, 20], values: [0.95, 0.95, 0.95, 0.8, 0.48, 0.18, 0.045, 0.005, 0] },
                        { heightRange: [20, Infinity], values: [0.95, 0.95, 0.95, 0.95, 0.87, 0.63, 0.34, 0.12, 0.015] }
                    ];

                    const otherTable = [
                        { heightRange: [0, 5], values: [0.03, 0.03,0.03, 0.026, 0.016, 0.006, 0.00075, 0, 0] },
                        { heightRange: [5, 10], values: [0.15, 0.15, 0.15, 0.13, 0.08, 0.03, 0.00375, 0, 0] },
                        { heightRange: [10, 15], values: [0.6, 0.6, 0.6, 0.52, 0.32, 0.12, 0.015, 0, 0] },
                        { heightRange: [15, 20], values: [0.95, 0.95, 0.95, 0.95, 0.80, 0.50, 0.20, 0.02, 0] },
                        { heightRange: [20, Infinity], values: [0.95, 0.95, 0.95, 0.95, 0.95, 0.8, 0.50, 0.20, 0.02] }
                    ];

                    const selectedTable = this.tableChoice === 'buildings' ? buildingsTable : otherTable;

                    const row = selectedTable.find(row => height >= row.heightRange[0] && height < row.heightRange[1]);

                    const angleRange = angleRanges.find(range => shadowAngle > range.min && shadowAngle <= range.max);

                    const angleIndex = angleRanges.indexOf(angleRange);

                    return row.values[angleIndex] || 0;
                },

                get D23() {
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
                        { min: 15, max: 20 },
                        { min: 10, max: 15 },
                    ];

                    const buildingsTable = [ 
                        { heightRange: [0, 5], values: [0.010, 0.008, 0.004, 0.002, 0.0005, 0.00008, 0.000005, 0, 0] },
                        { heightRange: [5, 10], values: [0.05, 0.04, 0.02, 0.01, 0.0025, 0.0004, 0.000025, 0, 0] },
                        { heightRange: [10, 15], values: [0.25, 0.24, 0.18, 0.10, 0.0425, 0.0104, 0.001525, 0, 0] },
                        { heightRange: [15, 20], values: [0.60, 0.60, 0.56, 0.45, 0.29, 0.135, 0.0435, 0.0076, 0] },
                        { heightRange: [20, Infinity], values: [0.80, 0.80, 0.80, 0.72, 0.50, 0.25, 0.084, 0.015, 0.001] }
                    ];

                    const otherTable = [
                        { heightRange: [0, 5], values: [0.040, 0.036, 0.025, 0.013, 0.004, 0.001, 0.0001, 0, 0] },
                        { heightRange: [5, 10], values: [0.20, 0.18, 0.125, 0.0625, 0.02, 0.005, 0.0005, 0, 0] },
                        { heightRange: [10, 15], values: [0.60, 0.58, 0.435, 0.315, 0.145, 0.05, 0.0105, 0, 0] },
                        { heightRange: [15, 20], values: [0.875, 0.875, 0.835, 0.725, 0.530, 0.285, 0.1, 0.0235, 0] },
                        { heightRange: [20, Infinity], values: [0.95, 0.95, 0.95, 0.95, 0.81, 0.48, 0.18, 0.045, 0.005] }
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