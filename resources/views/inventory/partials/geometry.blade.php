{{-- CUT TYPE --}}
@if ($slope->slope_type == 'cut-type')
<div class="grid sm:grid-cols-5 gap-4">
    <div class="col-span-2">
        <h4 class="font-bold mb-1">Geometry</h4>
        <div id="accordion-open" data-accordion="open">
            <p class="text-gray-800 mb-2" id="accordion-open-heading-2">
                (refer to <button type="button" data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                    aria-controls="accordion-open-body-2" class="text-lime-600 font-bold">Figure A1</button>)
            </p>

            <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                <div class="p-4 border border-gray-300 rounded-xl">
                    <img src="/components/slope-cut.png" id="figureA1" class="w-full" alt="">
                </div>
            </div>
        </div>

        <script>
            const viewer = new Viewer(document.getElementById('figureA1'), {
                inline: false,
                viewed() {
                    viewer.zoomTo(1);
                },
            });
        </script>

    </div>
    <div class="col-span-3">
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
                        soil_slope_height: {{isset($geometry->soil_slope_height) ? $geometry->soil_slope_height : 0}},
                        soil_slope_height_2: {{isset($geometry->soil_slope_height_2) ? $geometry->soil_slope_height_2 : 0}},
                        rock_slope_height: {{isset($geometry->rock_slope_height) ? $geometry->rock_slope_height : 0}},
                        rock_slope_height_2: {{isset($geometry->rock_slope_height_2) ? $geometry->rock_slope_height_2 : 0}},
                        height_r: {{isset($geometry->height_r) ? $geometry->height_r : 0}},
                        height_r_2: {{isset($geometry->height_r_2) ? $geometry->height_r_2 : 0}},
                        crest_wall_height: {{isset($geometry->crest_wall_height) ? $geometry->crest_wall_height : 0}},
                        crest_wall_height_2: {{isset($geometry->crest_wall_height_2) ? $geometry->crest_wall_height_2 : 0}},
                        toe_wall_height: {{isset($geometry->toe_wall_height) ? $geometry->toe_wall_height : 0}},
                        toe_wall_height_2: {{isset($geometry->toe_wall_height_2) ? $geometry->toe_wall_height_2 : 0}},
                        upslope_angle: {{isset($geometry->upslope_angle) ? $geometry->upslope_angle : 0}},
                        upslope_angle_2: {{isset($geometry->upslope_angle_2) ? $geometry->upslope_angle_2 : 0}},
                        surchange_above_slope_crest: {{isset($geometry->surchange_above_slope_crest) ? $geometry->surchange_above_slope_crest : 0}},
                        surchange_above_slope_crest_2: {{isset($geometry->surchange_above_slope_crest_2) ? $geometry->surchange_above_slope_crest_2 : 0}},
                        soil_slope_angle: {{isset($geometry->soil_slope_angle) ? $geometry->soil_slope_angle : 0}},
                        soil_slope_angle_2: {{isset($geometry->soil_slope_angle_2) ? $geometry->soil_slope_angle_2 : 0}},
                        average_slope_angle:{{isset($geometry->average_slope_angle) ? $geometry->average_slope_angle : 0}},
                        average_slope_angle_2: {{isset($geometry->average_slope_angle_2) ? $geometry->average_slope_angle_2 : 0}},
                        downslope_gradient: {{isset($geometry->downslope_gradient) ? $geometry->downslope_gradient : 0}},
                        downslope_gradient_2:{{isset($geometry->downslope_gradient_2) ? $geometry->downslope_gradient_2 : 0}},
                        soil_bulk_unit_weight: {{isset($geometry->soil_bulk_unit_weight) ? $geometry->soil_bulk_unit_weight : 1}},
                        section2Enabled: {{isset($geometry->section) ? 'true' : 'false'}},
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
@endif

{{-- FILL TYPE --}}
@if ($slope->slope_type == 'fill-type')
<div class="grid sm:grid-cols-2 gap-4" x-data="form()">
    <div>
        <h4 class="font-bold">Geometry</h4>
        <div id="accordion-open" data-accordion="open">
            <p class="text-gray-800 mb-5" id="accordion-open-heading-2">
                (refer to <button type="button" data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                    aria-controls="accordion-open-body-2" class="text-lime-600 font-bold">Figure A1</button>)
            </p>

            <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                <div class="p-4 border border-gray-300 rounded-xl">
                    <img src="/components/slope-fill.png" class="w-full" id="figureA1" alt="">
                </div>
            </div>

            <script>
                const viewer = new Viewer(document.getElementById('figureA1'), {
                    inline: false,
                    viewed() {
                        viewer.zoomTo(1);
                    },
                });
            </script>

        </div>
    </div>
    <div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="fill_slope_height" class="text-sm block font-medium text-gray-900 dark:text-white">Fill
                    Slope Height, <span class="font-serif italic text-gray-600">
                        H<sub>r</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="fill_slope_height" x-model.number="fill_slope_height"
                        name="fill_slope_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>


        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="crest_wall_height" class="text-sm block font-medium text-gray-900 dark:text-white">Crest
                    Wall Height, <span class="font-serif italic text-gray-600">
                        H<sub>cw</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="crest_wall_height" x-model.number="crest_wall_height"
                        name="crest_wall_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="toe_wall_height" class="text-sm block font-medium text-gray-900 dark:text-white">Toe
                    Wall Height, <span class="font-serif italic text-gray-600">
                        H<sub>tw</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="toe_wall_height" x-model.number="toe_wall_height"
                        name="toe_wall_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="fill_slope_angle" class="text-sm block font-medium text-gray-900 dark:text-white">Fill
                    Slope Angle, <span class="font-serif italic text-gray-600">
                        &#952;<sub>r</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="fill_slope_angle" x-model.number="fill_slope_angle"
                        name="fill_slope_angle"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="average_slope_angle" class="text-sm block font-medium text-gray-900 dark:text-white">Average
                    Slope Angle, <span class="font-serif italic text-gray-600">
                        &#952;</label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="average_slope_angle" x-model.number="average_slope_angle"
                        name="average_slope_angle"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="feature_height" class="text-sm block font-medium text-gray-900 dark:text-white">Feature
                    Height, <span class="font-serif italic text-gray-600">
                        H</label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="feature_height" name="feature_height" readonly
                        :value="featureHeight"
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
                fill_slope_height: {{isset($geometry->fill_slope_height) ? $geometry->fill_slope_height : 0}},
                crest_wall_height: {{isset($geometry->crest_wall_height) ? $geometry->crest_wall_height : 0}},
                toe_wall_height: {{isset($geometry->toe_wall_height) ? $geometry->toe_wall_height : 0}},
                fill_slope_angle: {{isset($geometry->fill_slope_angle) ? $geometry->fill_slope_angle : 0}},
                average_slope_angle: {{isset($geometry->average_slope_angle) ? $geometry->average_slope_angle : 0}},
                section2Enabled: {{isset($geometry->section) ? 'true' : 'false'}},

                get featureHeight() {
                    return this.fill_slope_height + this.crest_wall_height + this.toe_wall_height;
                }
            }
        }
    </script>
</div>
<x-line />
@endif

{{-- ROCK TYPE --}}
@if ($slope->slope_type == 'rock-type')
<div class="grid sm:grid-cols-2 gap-4" x-data="form()">
    <div>
        <h4 class="font-bold">Geometry</h4>
        <div id="accordion-open" data-accordion="open">
            <p class="text-gray-800 mb-5" id="accordion-open-heading-2">
                (refer to <button type="button" data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                    aria-controls="accordion-open-body-2" class="text-lime-600 font-bold">Figure A1</button>)
            </p>

            <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                <div class="p-4 border border-gray-300 rounded-xl">
                    <img src="/components/slope-rock.png" id="figureA1" class="w-full" alt="">
                </div>
            </div>
            <script>
                const viewer = new Viewer(document.getElementById('figureA1'), {
                    inline: false,
                    viewed() {
                        viewer.zoomTo(1);
                    },
                });
            </script>

        </div>
    </div>
    <div>
        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="rock_slope_height" class="text-sm block font-medium text-gray-900 dark:text-white">Rock
                    Slope Height, <span class="font-serif italic text-gray-600">
                        H<sub>r</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="rock_slope_height" x-model.number="rock_slope_height"
                        name="rock_slope_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="soil_slope_height" class="text-sm block font-medium text-gray-900 dark:text-white">Soil
                    Slope Height, <span class="font-serif italic text-gray-600">
                        H<sub>s</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="soil_slope_height" x-model.number="soil_slope_height"
                        name="soil_slope_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="crest_wall_height" class="text-sm block font-medium text-gray-900 dark:text-white">Crest
                    Wall Height, <span class="font-serif italic text-gray-600">
                        H<sub>cw</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="crest_wall_height" x-model.number="crest_wall_height"
                        name="crest_wall_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="toe_wall_height" class="text-sm block font-medium text-gray-900 dark:text-white">Toe
                    Wall Height, <span class="font-serif italic text-gray-600">
                        H<sub>tw</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="toe_wall_height" x-model.number="toe_wall_height"
                        name="toe_wall_height"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        m
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="rock_slope_angle" class="text-sm block font-medium text-gray-900 dark:text-white">Rock
                    Slope Angle, <span class="font-serif italic text-gray-600">
                        &#952;<sub>r</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="rock_slope_angle" x-model.number="rock_slope_angle"
                        name="rock_slope_angle"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="soil_slope_angle" class="text-sm block font-medium text-gray-900 dark:text-white">Soil
                    Slope Angle, <span class="font-serif italic text-gray-600">
                        &#952;<sub>s</sub></label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="soil_slope_angle" x-model.number="soil_slope_angle"
                        name="soil_slope_angle"
                        class="'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500'" />
                    <p class="absolute inset-y-0 end-0 flex items-center pe-3">
                        Deg
                    </p>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-3 mb-3">
            <div class="flex items-center">
                <label for="feature_height" class="text-sm block font-medium text-gray-900 dark:text-white">Feature
                    Height, <span class="font-serif italic text-gray-600">
                        H</label>
            </div>
            <div class="col-span-2 flex">
                <div class="relative w-full mr-2">
                    <input type="number" step="0.01" id="feature_height" name="feature_height" readonly
                        :value="featureHeight"
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
                rock_slope_height: {{isset($geometry->rock_slope_height) ? $geometry->rock_slope_height : 0}},
                soil_slope_height: {{isset($geometry->soil_slope_height) ? $geometry->soil_slope_height : 0}},
                crest_wall_height: {{isset($geometry->crest_wall_height) ? $geometry->crest_wall_height : 0}},
                toe_wall_height: {{isset($geometry->toe_wall_height) ? $geometry->toe_wall_height : 0}},
                rock_slope_angle: {{isset($geometry->rock_slope_angle) ? $geometry->rock_slope_angle : 0}},
                soil_slope_angle: {{isset($geometry->soil_slope_angle) ? $geometry->soil_slope_angle : 0}},
                section2Enabled: {{isset($geometry->section) ? 'true' : 'false'}},

                get featureHeight() {
                    return this.soil_slope_height + this.rock_slope_height + this.crest_wall_height + this.toe_wall_height;
                }
            }
        }
    </script>
</div>
<x-line />
@endif

{{-- RETAINING TYPE --}}
@if ($slope->slope_type == 'retaining-type')
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
                    <img src="/components/slope-retaining.png" class="w-full" alt="" id="figureA1">
                </div>
                <script>
                    const viewer = new Viewer(document.getElementById('figureA1'), {
                        inline: false,
                        viewed() {
                            viewer.zoomTo(1);
                        },
                    });
                </script>
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
                        soil_slope_height: {{isset($geometry->soil_slope_height) ? $geometry->soil_slope_height : 0}},
                        soil_slope_height_2: {{isset($geometry->soil_slope_height_2) ? $geometry->soil_slope_height_2 : 0}},
                        rock_slope_height: {{isset($geometry->rock_slope_height) ? $geometry->rock_slope_height : 0}},
                        rock_slope_height_2: {{isset($geometry->rock_slope_height_2) ? $geometry->rock_slope_height_2 : 0}},
                        height_r: {{isset($geometry->height_r) ? $geometry->height_r : 0}},
                        height_r_2: {{isset($geometry->height_r_2) ? $geometry->height_r_2 : 0}},
                        crest_wall_height: {{isset($geometry->crest_wall_height) ? $geometry->crest_wall_height : 0}},
                        crest_wall_height_2: {{isset($geometry->crest_wall_height_2) ? $geometry->crest_wall_height_2 : 0}},
                        toe_wall_height: {{isset($geometry->toe_wall_height) ? $geometry->toe_wall_height : 0}},
                        toe_wall_height_2: {{isset($geometry->toe_wall_height_2) ? $geometry->toe_wall_height_2 : 0}},
                        upslope_angle: {{isset($geometry->upslope_angle) ? $geometry->upslope_angle : 0}},
                        upslope_angle_2: {{isset($geometry->upslope_angle_2) ? $geometry->upslope_angle_2 : 0}},
                        surchange_above_slope_crest: {{isset($geometry->surchange_above_slope_crest) ? $geometry->surchange_above_slope_crest : 0}},
                        surchange_above_slope_crest_2: {{isset($geometry->surchange_above_slope_crest_2) ? $geometry->surchange_above_slope_crest_2 : 0}},
                        soil_slope_angle: {{isset($geometry->soil_slope_angle) ? $geometry->soil_slope_angle : 0}},
                        soil_slope_angle_2: {{isset($geometry->soil_slope_angle_2) ? $geometry->soil_slope_angle_2 : 0}},
                        average_slope_angle:{{isset($geometry->average_slope_angle) ? $geometry->average_slope_angle : 0}},
                        average_slope_angle_2: {{isset($geometry->average_slope_angle_2) ? $geometry->average_slope_angle_2 : 0}},
                        downslope_gradient: {{isset($geometry->downslope_gradient) ? $geometry->downslope_gradient : 0}},
                        downslope_gradient_2:{{isset($geometry->downslope_gradient_2) ? $geometry->downslope_gradient_2 : 0}},
                        soil_bulk_unit_weight: {{isset($geometry->soil_bulk_unit_weight) ? $geometry->soil_bulk_unit_weight : 1}},
                        section2Enabled: {{isset($geometry->section) ? 'true' : 'false'}},

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
@endif

{{-- COMBINE TYPE --}}
@if ($slope->slope_type == 'combine-type')
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
                    <img src="/components/slope-combine.png" class="w-full" alt="" id="figureA1">
                </div>

                <script>
                    const viewer = new Viewer(document.getElementById('figureA1'), {
                        inline: false,
                        viewed() {
                            viewer.zoomTo(1);
                        },
                    });
                </script>
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
                        soil_slope_height: {{isset($geometry->soil_slope_height) ? $geometry->soil_slope_height : 0}},
                        soil_slope_height_2: {{isset($geometry->soil_slope_height_2) ? $geometry->soil_slope_height_2 : 0}},
                        rock_slope_height: {{isset($geometry->rock_slope_height) ? $geometry->rock_slope_height : 0}},
                        rock_slope_height_2: {{isset($geometry->rock_slope_height_2) ? $geometry->rock_slope_height_2 : 0}},
                        height_r: {{isset($geometry->height_r) ? $geometry->height_r : 0}},
                        height_r_2: {{isset($geometry->height_r_2) ? $geometry->height_r_2 : 0}},
                        crest_wall_height: {{isset($geometry->crest_wall_height) ? $geometry->crest_wall_height : 0}},
                        crest_wall_height_2: {{isset($geometry->crest_wall_height_2) ? $geometry->crest_wall_height_2 : 0}},
                        toe_wall_height: {{isset($geometry->toe_wall_height) ? $geometry->toe_wall_height : 0}},
                        toe_wall_height_2: {{isset($geometry->toe_wall_height_2) ? $geometry->toe_wall_height_2 : 0}},
                        upslope_angle: {{isset($geometry->upslope_angle) ? $geometry->upslope_angle : 0}},
                        upslope_angle_2: {{isset($geometry->upslope_angle_2) ? $geometry->upslope_angle_2 : 0}},
                        surchange_above_slope_crest: {{isset($geometry->surchange_above_slope_crest) ? $geometry->surchange_above_slope_crest : 0}},
                        surchange_above_slope_crest_2: {{isset($geometry->surchange_above_slope_crest_2) ? $geometry->surchange_above_slope_crest_2 : 0}},
                        soil_slope_angle: {{isset($geometry->soil_slope_angle) ? $geometry->soil_slope_angle : 0}},
                        soil_slope_angle_2: {{isset($geometry->soil_slope_angle_2) ? $geometry->soil_slope_angle_2 : 0}},
                        average_slope_angle:{{isset($geometry->average_slope_angle) ? $geometry->average_slope_angle : 0}},
                        average_slope_angle_2: {{isset($geometry->average_slope_angle_2) ? $geometry->average_slope_angle_2 : 0}},
                        downslope_gradient: {{isset($geometry->downslope_gradient) ? $geometry->downslope_gradient : 0}},
                        downslope_gradient_2:{{isset($geometry->downslope_gradient_2) ? $geometry->downslope_gradient_2 : 0}},
                        soil_bulk_unit_weight: {{isset($geometry->soil_bulk_unit_weight) ? $geometry->soil_bulk_unit_weight : 1}},
                        section2Enabled: {{isset($geometry->section) ? 'true' : 'false'}},

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
@endif