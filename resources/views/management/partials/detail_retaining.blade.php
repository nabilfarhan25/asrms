<div x-data="levelGeotechnical()">
    <div class="flex justify-between items-center">
        <legend class="text-lg font-semibold mb-2">Level of Geotechnical Engineering Input</legend>
        <div class="flex items-center">
            <h2 class="text-sm text-gray-900 dark:text-gray-300 font-bold">A1 :</h2>
            <input type="text" readonly :value="A1" disabled
                class="ml-3 p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
        </div>
    </div>

    <div class="form-section mb-4">
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="10" id="level1" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="level1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with none
                or little geotechnical engineering input</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="3" id="level2" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="level2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with
                indication of some geotechnical engineering input</label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="A1" value="1" id="level3" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="level3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Slopes with
                indication of substantial geotechnical engineering input</label>
        </div>

    </div>
    <script>
        function levelGeotechnical() {
            return {
                A1: {{$rating->A1}},
            }
        }
    </script>
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
            </label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="4" id="diss2" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="diss2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                <span class="text-sm font-semibold">Moderate</span>
            </label>
        </div>
        <div class="flex items-center mb-2">
            <input type="radio" x-model="B1" value="1" id="diss3" disabled
                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="diss3" class="ms-2 text-sm text-gray-900 dark:text-gray-300">
                <span class="text-sm font-semibold">Minor/None</span>
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