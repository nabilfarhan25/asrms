<div x-data="{
    fieldName: '{{ $fieldName }}',
    value1: {{ $value1 }},
    value2: {{ $value2 }},
    section2Enabled: {{ $section2Enabled ? 'true' : 'false' }}
}" class="grid sm:grid-cols-3 mb-3">
    <div class="flex items-center">
        <label class="text-sm sm:font-medium sm:mb-0 mb-2">
            {{ $label }},
            <span class="italic text-gray-600" x-html="'{!! $symbol !!}'"></span>
        </label>
    </div>
    <div class="col-span-2 flex">
        <div class="relative w-full mr-2">
            <input type="number" step="0.01" x-model.number="value1" :name="fieldName"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
            <p class="absolute inset-y-0 end-0 flex items-center pe-3">{{ $unit }}</p>
        </div>
        <div class="relative w-full">
            <input type="number" step="0.01" x-model.number="value2" :name="`${fieldName}_2`"
                :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500" />
            <p class="absolute inset-y-0 end-0 flex items-center pe-3">{{ $unit }}</p>
        </div>
    </div>
</div>