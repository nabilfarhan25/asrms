<div class="mb-3">
    <div class="mb-2">
        <label for="" class="font-bold text-lg">Section :</label>
        <p class="font-medium text-gray-800">
            Check if H1 &#8805; 75% x H2. If yes, consider Section 1-1 only; If No, consider
            both
            Sections
            1-1 and 2-2
        </p>
    </div>
    <div class="flex items-center mb-2">
        <input disabled checked id="" type="checkbox" value="notused"
            class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 rounded focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="" class="ms-2 text-sm font-medium text-gray-400 dark:text-gray-500">1-1
            (Most Severe Consequence)</label>
    </div>
    <div class="flex items-center">
        <input type="checkbox" name="section" value="use" id="section2Toggle" x-model="section2Enabled"
            {{isset($geometry->section) ? 'checked' : ''}}
        class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 rounded focus:ring-lime-500 dark:focus:ring-lime-600
        dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="section2Toggle" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2-2
            (Maximum Feature Height)</label>
    </div>
</div>
<x-line />

@include('inventory.partials.geometry')

@include('inventory.partials.affected_facilities')


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