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

<div x-data="sliding()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Sliding and Minor Washout Failure</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A2 :</h2>
            <input type="text" readonly :value="A2" name="A2"
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2">
        <div class="mb-5">
            <label for="geometry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Geometry (From
                Figure
                C1)</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="geometry">
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
                <option>S4</option>
                <option>S5</option>
                <option>S6</option>
            </select>

        </div>
        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of
                Surface
                Cover</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="surface_drain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surface
                Drainage Provision</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_drain">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="signs_of_seepage" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surface
                Signs of Seepage
            </label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="signs_of_seepage">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="potential" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Potential
                Leaking Water-carrying Services
            </label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="potential">
                <option>Leaking</option>
                <option>Presence</option>
                <option>None</option>
            </select>
        </div>
    </div>


    <script>
        function sliding() {
            return {
                A2: 0,
            }
        }
    </script>
</div>
<x-line />

<div x-data="sliding()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Sliding and Minor Washout Failure</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A2 :</h2>
            <input type="text" readonly :value="A2" name="A2"
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2">
        <div class="mb-5">
            <label for="geometry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Feature Height, H
                (m)</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="geometry">
                <option>H &#8805; 30</option>
                <option>20 &#8805; H < 30</option>
                <option>10 &#8805; H < 20</option>
                <option>H < 10</option>

            </select>

        </div>
        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of
                Surface Cover</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>Bare</option>
                <option>Vegetated</option>
                <option>Chunam</option>
                <option>Shotcrete</option>

            </select>
        </div>


    </div>

    <script>
        function sliding() {
            return {
                A2: 0,
            }
        }
    </script>
</div>
<x-line />

<div x-data="sliding()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Catchment Characteristics : Topographic
            Setting and Size of Catchment</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A2 :</h2>
            <input type="text" readonly :value="A2" name="A2"
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2">
        <div class="mb-5">
            <label for="geometry" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topographic
                Setting</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="geometry">
                <option>Traverse Drainage Line</option>
                <option>Adjacent to Drainage Line</option>
                <option>Traverse Topographic Depression</option>
                <option>Adjacent to Topographic Depression</option>
                <option>Planar Slope </option>
                <option>Spur</option>
            </select>

        </div>
        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Size of
                Catchment (m2)</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>&#8804; 100</option>
                <option>100 - 500</option>
                <option>500 - 1000</option>
                <option>1000 - 10000</option>
                <option>> 10000</option>
            </select>
        </div>
    </div>
    <x-line />
    <div class="grid grid-cols-2 gap-2">
        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of
                Crest Facility</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>Road</option>
                <option>Platform & Urban Developmen</option>
                <option>CatchWater</option>
                <option>Minor
                    Development
                    e.g. Rural
                    Footpath</option>
                <option>Natural
                    Hillside</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Volume of
                Fill Body (m3)</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>&#8804; 100</option>
                <option>100 - 500</option>
                <option>500 - 1000</option>
                <option>1000 - 10000</option>
                <option>> 10000</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="surface_cover"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Channelisation of Debris</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Erosion and
                Entrainment along Debris Trail</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spread of
                Debris</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unstable
                Terrain</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="surface_cover" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masonry Wall
                at Crest</label>
            <select
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500 dark:shadow-sm-light"
                name="" id="surface_cover">
                <option>Wall Height &#8805; 3 m</option>
                <option>Wall Height < 3 m</option>
                <option>No Masonry Wall</option>
            </select>
        </div>
    </div>

    <script>
        function sliding() {
            return {
                A2: 0,
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
            <select id="tableChoice" x-model="tableChoice"
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
<x-line />
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
                <select id="tableChoice" x-model="tableChoice"
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
    <x-line />

    <div>
        <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">Consequence To Life (CTL)
            Catergory
        </h3>
        <ul class="grid w-full gap-6 md:grid-cols-3">
            <li>
                <input type="radio" id="cat1" name="consequence_to_life" value="category-1" checked class="hidden peer"
                    required />
                <label for="cat1"
                    class="inline-flex w-full p-6 text-gray-500 border h-80 border-gray-400 rounded-2xl cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-lime-500 peer-checked:border-lime-600 peer-checked:text-lime-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="block">
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
                    </div>
                </label>
            </li>
            <li>
                <input type="radio" id="cat2" name="consequence_to_life" value="category-2" class="hidden peer">
                <label for="cat2"
                    class="inline-flex w-full p-6 text-gray-500 border h-80 border-gray-400 rounded-2xl cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-lime-500 peer-checked:border-lime-600 peer-checked:text-lime-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="block">
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
                    </div>

                </label>
            </li>
            <li>
                <input type="radio" id="cat3" name="consequence_to_life" value="category-3" class="hidden peer">
                <label for="cat3"
                    class="inline-flex w-full p-6 text-gray-500 border h-80 border-gray-400 rounded-2xl cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-lime-500 peer-checked:border-lime-600 peer-checked:text-lime-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="block">
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
                    </div>

                </label>
            </li>
        </ul>
    </div>
</div>
<x-line />