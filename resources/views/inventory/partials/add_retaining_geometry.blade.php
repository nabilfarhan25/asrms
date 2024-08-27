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
            class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 rounded focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="section2Toggle" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2-2
            (Maximum Feature Height)</label>
    </div>
</div>
<x-line />

<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">Geometry</h4>
        <div id="accordion-open" data-accordion="open">
            <p class="text-gray-800 mb-5" id="accordion-open-heading-2">
                (refer to <button type="button" data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                    aria-controls="accordion-open-body-2" class="text-lime-600 font-bold">Figure A1</button>)
            </p>

            <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                <div class="p-4 border border-gray-300 rounded-xl">
                    <img src="/components/slope.png" class="w-full" alt="">
                </div>
            </div>
        </div>


    </div>
    <div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Soil Slope
                    Height,<span class="italic text-gray-600">
                        H<sub>s</sub>
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="soil_slope_height" autofocus
                        name="soil_slope_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="soil_slope_height_2" name="soil_slope_height_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Rock Slope
                    Height,<span class="italic text-gray-600">
                        H<sub>r</sub>
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="rock_slope_height" name="rock_slope_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="rock_slope_height_2" name="rock_slope_height_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Rock Slope
                    Height,<span class="italic text-gray-600">
                        H<sub>r'</sub>
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="height_r" name="height_r"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="height_r_2" name="height_r_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Crest Wall
                    Height,<span class="italic text-gray-600">
                        H<sub>cw</sub>
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="crest_wall_height" name="crest_wall_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="crest_wall_height_2" name="crest_wall_height_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Toe Wall
                    Height,<span class="italic text-gray-600">
                        H<sub>tw</sub>
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="toe_wall_height" name="toe_wall_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="toe_wall_height_2" name="toe_wall_height_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Upslope Angle,
                    <span class="italic text-gray-600">
                        β
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="upslope_angle" name="upslope_angle"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="upslope_angle_2" name="upslope_angle_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Surcharge
                    above
                    <br>
                    the
                    Slope Crest,
                    <span class="italic text-gray-600">
                        s
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="surchange_above_slope_crest"
                        name="surchange_above_slope_crest"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        kPa
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="surchange_above_slope_crest_2"
                        name="surchange_above_slope_crest_2" :disabled="!section2Enabled"
                        :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        kPa
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Soil Slope Angle,
                    <span class="italic text-gray-600">
                        θ<sub>s</sub>
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="soil_slope_angle" name="soil_slope_angle"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="soil_slope_angle_2" name="soil_slope_angle_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Average Slope Angle,
                    <span class="italic text-gray-600">
                        θ
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="average_slope_angle" name="average_slope_angle"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="average_slope_angle_2" name="average_slope_angle_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Downslope Gradient,
                    <span class="italic text-gray-600">
                        α
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" x-model.number="downslope_gradient" name="downslope_gradient"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="downslope_gradient_2" name="downslope_gradient_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Soil bulk
                    unit weight,<span class="italic text-gray-600">
                        γ<sub>b</sub>
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full">
                    <input type="number" step="0.01" x-model.number="soil_bulk_unit_weight" name="soil_bulk_unit_weight"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        kN/m<sup>3</sup>
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Feature
                    Height,<span class="italic text-gray-600"> H
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" :value="featureHeight1" readonly name="feature_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" :value="featureHeight2" readonly name="feature_height_2"
                        name="downslope_gradient_2" :disabled="!section2Enabled"
                        :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">H<sub>w</sub>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" :value="H_w_1" readonly name="height_w"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" :value="H_w_2" readonly name="height_w_2" name="downslope_gradient_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">H<sub>c</sub>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" :value="H_c_1" readonly name="height_c"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" :value="H_c_2" readonly name="height_c_2" name="downslope_gradient_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">H<sub>o</sub>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" :value="H_o_1" readonly name="height_o"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" :value="H_o_2" readonly name="height_o_2" name="downslope_gradient_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label class="text-sm sm:font-medium sm:mb-0 mb-2">Effective
                    Height,
                    H<sub>e</sub>
                    </span>
                </label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" :value="effectiveHeight1" readonly name="effective_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
                <div class="relative w-full">
                    <input type="number" :value="effectiveHeight2" readonly name="effective_height_2"
                        name="downslope_gradient_2" :disabled="!section2Enabled"
                        :class="{'bg-slate-100': !section2Enabled}"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        function formHandler() {
                    return {
                        soil_slope_height: 0,
                        soil_slope_height_2: 0,
                        rock_slope_height: 0,
                        rock_slope_height_2: 0,
                        height_r: 0,
                        height_r_2: 0,
                        crest_wall_height: 0,
                        crest_wall_height_2: 0,
                        toe_wall_height: 0,
                        toe_wall_height_2: 0,
                        upslope_angle: 0,
                        upslope_angle_2: 0,
                        surchange_above_slope_crest: 0,
                        surchange_above_slope_crest_2: 0,
                        soil_slope_angle: 0,
                        soil_slope_angle_2: 0,
                        average_slope_angle: 0,
                        average_slope_angle_2: 0,
                        downslope_gradient: 0,
                        downslope_gradient_2: 0,
                        soil_bulk_unit_weight: 1,
                        section2Enabled: false,
                        get featureHeight1() {
                            return this.soil_slope_height + this.rock_slope_height + this.crest_wall_height + this.toe_wall_height;
                        },
                        get featureHeight2() {
                            return this.soil_slope_height_2 + this.rock_slope_height_2 + this.crest_wall_height_2 + this.toe_wall_height_2;
                        },
                        get H_w_1() {
                            return this.crest_wall_height + this.toe_wall_height;
                        },
                        get H_w_2() {
                            return this.crest_wall_height_2 + this.toe_wall_height_2;
                        },
                        get H_c_1() {
                            return this.soil_slope_height + this.rock_slope_height;
                        },
                        get H_c_2() {
                            return this.soil_slope_height_2 + this.rock_slope_height_2;
                        },
                        get H_o_1() {
                            return this.soil_slope_height + this.height_r + this.crest_wall_height;
                        },
                        get H_o_2() {
                            return this.soil_slope_height_2 + this.height_r_2 + this.crest_wall_height_2;
                        },
                        get effectiveHeight1() {
                            return this.H_o_1 * (1 + 0.35 * Math.tan(this.upslope_angle * Math.PI / 180)) + this.surchange_above_slope_crest / this.soil_bulk_unit_weight;
                        },
                        get effectiveHeight2() {
                            return this.H_o_2 * (1 + 0.35 * Math.tan(this.upslope_angle_2 * Math.PI / 180)) + this.surchange_above_slope_crest_2 / this.soil_bulk_unit_weight;
                        }
                    }
                }
    </script>
</div>
<x-line />

<h4 class="font-bold mb-2 text-gray-800">Affected Facilities</h4>
<p class="text-gray-800 mb-5">(refer to <a href="#"
        class="text-lime-600 underline dark:text-lime-500 hover:no-underline" data-popover-target="popover-image">Table
        2.1</a>)</p>
<div data-popover id="popover-image" role="tooltip"
    class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
    <div class="p-3">
        <table class="text-xs max-w-xl">
            <thead>
                <tr>
                    <th class="border border-gray-300 p-2">Facility Group</th>
                    <th class="border border-gray-300 p-2">Facilities</th>
                    <th class="border border-gray-300 p-2">Consequence-to-life Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 p-2 text-center" rowspan="2">1</td>
                    <td class="border border-gray-300 p-2">
                        (a) Heavily Used Buildings
                        <ul class="list-disc list-inside">
                            <li>residential building, commercial office, store and shop, hotel, factory,
                                school, power
                                station, ambulance depot, market, hospital, polyclinic, clinic, welfare
                                centre</li>
                        </ul>
                    </td>
                    <td class="border border-gray-300 p-2 text-center" rowspan="3">1</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">
                        (b) Others
                        <ul class="list-disc list-inside">
                            <li>cottage, licensed and squatter areas</li>
                            <li>bus shelter, railway platform and other sheltered public waiting area
                            </li>
                            <li>dangerous goods storage site (e.g. petrol stations)</li>
                            <li>road with very heavy vehicular or pedestrian traffic density</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-center" rowspan="2">2</td>

                    <td class="border border-gray-300 p-2">
                        (a) Lightly Used Buildings
                        <ul class="list-disc list-inside">
                            <li>indoor car park, building within barracks, abattoir, incinerator, indoor
                                games' sport
                                hall, sewage treatment plant, refuse transfer station, church, temple,
                                monastery, civic
                                centre, manned substation</li>
                        </ul>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">
                        (b) Others
                        <ul class="list-disc list-inside">
                            <li>major infrastructure facility (e.g. railway, tramway, flyover, subway,
                                tunnel portal,
                                service reservoir)</li>
                            <li>construction site (if future use not certain)</li>
                            <li>road with heavy vehicular or pedestrian traffic density</li>
                        </ul>
                    </td>
                    <td class="border border-gray-300 p-2 text-center" rowspan="2">2</td>

                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-center">3</td>
                    <td class="border border-gray-300 p-2">
                        <ul class="list-disc list-inside">
                            <li>
                                Heavily used open space and public waiting area (e.g. heavily used
                                playground, open car
                                park, heavily used sitting out area, horticulture garden)
                            </li>
                            <li>
                                Road with moderate vehicular or pedestrian traffic density
                            </li>
                        </ul>

                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-center">4</td>
                    <td class="border border-gray-300 p-2">
                        <ul class="list-disc list-inside">
                            <li>
                                Lightly used open-air recreation area (e.g. district open space, lightly
                                used playground,
                                cemetery, columbarium)
                            </li>
                            <li>
                                Non-dangerous goods storage site
                            </li>
                            <li>
                                Road with low vehicular or pedestrian traffic density
                            </li>
                        </ul>
                    </td>
                    <td class="border border-gray-300 p-2 text-center" rowspan="2">3</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2 text-center">5</td>
                    <td class="border border-gray-300 p-2">
                        <ul class="list-disc list-inside">
                            <li>
                                Remote area (e.g. country park, undeveloped green belt, abandoned quarry)
                            </li>
                            <li>
                                Road with very low vehicular or pedestrian traffic density
                            </li>
                        </ul>
                    </td>
                    <td></td>

                </tr>

            </tbody>
        </table>
    </div>
    <div data-popper-arrow></div>
</div>


<div class="relative overflow-x-auto">
    <table class="bg-slate-50 border border-gray-300 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">
                    Section 1-1
                </th>
                <th class="min-w-96 border border-gray-300 px-4 py-2 text-left ">
                    Facility Type (for roads, please give name)
                </th>
                <th class="min-w-52 border border-gray-300 px-4 py-2 text-left">
                    Facility Group
                </th>
                <th class="min-w-64 border border-gray-300 px-4 py-2 text-left">
                    Proximity
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Toe</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="toe_facility_type" name="toe_facility_type"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select id="toe_facility_group" name="toe_facility_group"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                        <option value="1(a)">1 (A)</option>
                        <option value="1(b)">1 (B)</option>

                        <option value="2(a)">2 (A)</option>
                        <option value="2(b)">2 (B)</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <div class="flex">
                        <div class="mr-2">
                            <label for="toe_l" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">L
                                =
                                -- m</label>
                            <input type="number" step="0.01" id="toe_l" name="toe_l" required
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>

                        <div>
                            <label for="toe_w"
                                class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">&#969;
                                = -- Deg</label>
                            <input type="number" step="0.01" id="toe_w" name="toe_w" required
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Crest</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="crest_facility_type" name="crest_facility_type"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select id="crest_facility_group" name="crest_facility_group"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                        <option value="1(a)">1 (A)</option>
                        <option value="1(b)">1 (B)</option>

                        <option value="2(a)">2 (A)</option>
                        <option value="2(b)">2 (B)</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </td>

                <td class="border border-gray-300 px-4 py-2">
                    <label for="toe_l" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">D
                        =
                        -- m</label>
                    <input type="number" step="0.01" id="crest_d" name="crest_d" required
                        class="mb-1 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
        </tbody>
    </table>

    <table class="bg-slate-50 border border-gray-300 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">
                    Section 2-2
                </th>
                <th class="min-w-96 border border-gray-300 px-4 py-2 text-left">
                    Facility Type (for roads, please give name)
                </th>
                <th class="min-w-52 border border-gray-300 px-4 py-2 text-left">
                    Facility Group
                </th>
                <th class="min-w-64 border border-gray-300 px-4 py-2 text-left">
                    Proximity
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Toe</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="toe_facility_type_2" name="toe_facility_type_2" :disabled="!section2Enabled"
                        :class="{'bg-slate-100': !section2Enabled}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select id="toe_facility_group_2" name="toe_facility_group_2" :disabled="!section2Enabled"
                        :class="{'bg-slate-100': !section2Enabled}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                        <option value="1(a)">1 (A)</option>
                        <option value="1(b)">1 (B)</option>

                        <option value="2(a)">2 (A)</option>
                        <option value="2(b)">2 (B)</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <div class="flex">
                        <div class="mr-2">
                            <label for="toe_l_2" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">L
                                =
                                -- m</label>
                            <input type="number" step="0.01" id="toe_l_2" name="toe_l_2" required
                                :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>

                        <div>
                            <label for="toe_w_2"
                                class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">&#969;
                                = -- Deg</label>
                            <input type="number" step="0.01" id="toe_w_2" name="toe_w_2" required
                                :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                                class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                        </div>
                    </div>
                </td>

            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Crest</td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" id="crest_facility_type_2" name="crest_facility_type_2"
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select id="crest_facility_group_2" name="crest_facility_group_2" :disabled="!section2Enabled"
                        :class="{'bg-slate-100': !section2Enabled}"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">>
                        <option value="1(a)">1 (A)</option>
                        <option value="1(b)">1 (B)</option>

                        <option value="2(a)">2 (A)</option>
                        <option value="2(b)">2 (B)</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </td>

                <td class="border border-gray-300 px-4 py-2">
                    <label for="toe_l" class="block mb-1 text-sm font-medium text-gray-500 dark:text-white">D
                        =
                        -- m</label>
                    <input type="number" step="0.01" id="crest_d_2" name="crest_d_2" required
                        :disabled="!section2Enabled" :class="{'bg-slate-100': !section2Enabled}"
                        class="mb-1 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
        </tbody>
    </table>
</div>
<x-line />

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