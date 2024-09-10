@include('inventory.partials.geometry')

@include('inventory.partials.affected_facilities')

<div>
    <table class="bg-slate-50 border border-gray-300 w-full text-sm mb-3">
        <thead>
            <tr class="bg-gray-200">
                <th rowspan="2" class="border border-gray-300 px-4 py-2 text-left">FEATURE NO.</th>
                <th colspan="4" class="border border-gray-300 px-4 py-2 text-left">
                    SITE OBSERVATIONS/FINDINGS
                </th>
            </tr>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">RAVELLING</th>
                <th class="border border-gray-300 px-4 py-2 text-left">TOPPLING</th>
                <th class="border border-gray-300 px-4 py-2 text-left">WEDGE</th>
                <th class="border border-gray-300 px-4 py-2 text-left">PLANAR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Rock lithology and nature of discontinuity (see
                    Remark A)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling1" name="ravelling1"
                        value="{{isset($geometry->ravelling1) ? $geometry->ravelling1 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling1" name="toppling1"
                        value="{{isset($geometry->toppling1) ? $geometry->toppling1 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge1" name="wedge1"
                        value="{{isset($geometry->wedge1) ? $geometry->wedge1 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar1" name="planar1"
                        value="{{isset($geometry->planar1) ? $geometry->planar1 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Dips of discontinuities/line of intersection of
                    discontinuities (°)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling2" name="ravelling2"
                        value="{{isset($geometry->ravelling2) ? $geometry->ravelling2 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling2" name="toppling2"
                        value="{{isset($geometry->toppling2) ? $geometry->toppling2 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge2" name="wedge2"
                        value="{{isset($geometry->wedge2) ? $geometry->wedge2 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar2" name="planar2"
                        value="{{isset($geometry->planar2) ? $geometry->planar2 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Persistence of discontinuity (m) (i.e. max.
                    dimension of trace length exposed)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling3" name="ravelling3"
                        value="{{isset($geometry->ravelling3) ? $geometry->ravelling3 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling3" name="toppling3"
                        value="{{isset($geometry->toppling3) ? $geometry->toppling3 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge3" name="wedge3"
                        value="{{isset($geometry->wedge3) ? $geometry->wedge3 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar3" name="planar3"
                        value="{{isset($geometry->planar3) ? $geometry->planar3 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Discontinuity spacing (m)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling4" name="ravelling4"
                        value="{{isset($geometry->ravelling4) ? $geometry->ravelling4 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling4" name="toppling4"
                        value="{{isset($geometry->toppling4) ? $geometry->toppling4 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge4" name="wedge4"
                        value="{{isset($geometry->wedge4) ? $geometry->wedge4 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar4" name="planar4"
                        value="{{isset($geometry->planar4) ? $geometry->planar4 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Discontinuity roughness and infilling (see
                    Remarks B and C)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling5" name="ravelling5"
                        value="{{isset($geometry->ravelling5) ? $geometry->ravelling5 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling5" name="toppling5"
                        value="{{isset($geometry->toppling5) ? $geometry->toppling5 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge5" name="wedge5"
                        value="{{isset($geometry->wedge5) ? $geometry->wedge5 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar5" name="planar5"
                        value="{{isset($geometry->planar5) ? $geometry->planar5 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Width of discontinuity aperture (see Remark D)
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling6" name="ravelling6"
                        value="{{isset($geometry->ravelling6) ? $geometry->ravelling6 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling6" name="toppling6"
                        value="{{isset($geometry->toppling6) ? $geometry->toppling6 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge6" name="wedge6"
                        value="{{isset($geometry->wedge6) ? $geometry->wedge6 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar6" name="planar6"
                        value="{{isset($geometry->planar6) ? $geometry->planar6 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
            <tr>
                <td class="border border-gray-300 px-4 py-2">Probable scale of failure volume (m³)</td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="ravelling7" name="ravelling7"
                        value="{{isset($geometry->ravelling7) ? $geometry->ravelling7 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="toppling7" name="toppling7"
                        value="{{isset($geometry->toppling7) ? $geometry->toppling7 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="wedge7" name="wedge7"
                        value="{{isset($geometry->wedge7) ? $geometry->wedge7 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
                <td class="border border-gray-300 px-4 py-2"><input type="text" id="planar7" name="planar7"
                        value="{{isset($geometry->planar7) ? $geometry->planar7 : ''}}"
                        class="block p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500">
                </td>
            </tr>
        </tbody>
    </table>

    <p class="mb-2 font-bold">
        Remarks
    </p>
    <table class="text-xs bg-slate-50 border border-gray-300 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2 text-left">A. Nature of Discontinuity</th>
                <th class="border border-gray-300 px-4 py-2 text-left">B. Roughness of Discontinuities</th>
                <th class="border border-gray-300 px-4 py-2 text-left">C. Infilling Materials</th>
                <th class="border border-gray-300 px-4 py-2 text-left">D. Aperture</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-300 px-4 py-2">
                    1. Joint<br>
                    2. Fault<br>
                    3. Tension crack<br>
                    4. Shear Plane<br>
                    5. Foliation<br>
                    6. Bedding
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    1. Rough<br>
                    2. Smooth<br>
                    3. Slickensided
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    1. Clean/staining<br>
                    2. Strong/Firm materials<br>
                    <i>e.g. decomposed/disintegrated rock</i><br>
                    3. Weak/Soft materials<br>
                    <i>e.g. soil/kaolin</i><br>
                    4. Others
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    1. Wide (> 200 mm)<br>
                    2. Moderate (20 - 200 mm)<br>
                    3. Narrow (0 - 20 mm)<br>
                    4. Tight (zero)
                </td>
            </tr>
        </tbody>
    </table>

    <p class="mt-2 text-xs">
        Note: If slope face is concealed or part of the slope inaccessible, the characteristics or
        discontinuities should be inferred from inspection of adjoining/nearby exposed slope areas.
    </p>
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