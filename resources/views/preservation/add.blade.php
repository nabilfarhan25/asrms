<x-form-layout>
    <div class="p-5">
        <x-header />
        <div class="flex justify-between py-2 px-3 sm:px-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <!-- Breadcrumb -->
            @php
            $bread = [
            ['url' => '/preservation/'.$slope->slug, 'label' => 'Preservations'],
            ['url' => '', 'label' => 'Create - '.$slope->slope_name,'active' => true],

            ];
            @endphp
            <x-bread :items="$bread" />

            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                class="inline-flex items-center p-2 text-sm font-medium text-center rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <div class="mr-3 font-medium text-base text-gray-800">Welcome, {{ Auth::user()->name }}</div>
                <svg class="w-5 h-5 text-lime-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownDots"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                    <li>
                        <a href="/profile"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a {{ __('Log Out') }} </a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log
                                    Out</a>
                        </form>
                    </li>
                </ul>
            </div>

        </div>


        @if ($errors->any())
        <div class="mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="max-w-7xl mx-auto lg:px-8 space-y-6">
            <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl" x-data="formHandler()">
                <form action="" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="slug" value="{{$slope->slug}}">

                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-xl">
                            FEATURE NO : {{$slope->slope_name}}
                        </h2>
                        <x-primary-button>Upload</x-primary-button>
                    </div>
                    <x-line />

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <div class="mb-4">
                                <label for="date_of_landslide"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of
                                    Landslide</label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input type="text" required autocomplete="off" datepicker datepicker-buttons
                                        name="date_of_landslide" datepicker-format="dd/mm/yyyy" id="date"
                                        datepicker-autoselect-today autocomplete="false"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                        placeholder="Select date">
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="landslide_type"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Landslide
                                    Type</label>
                                <select name="landslide_type" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                    id="landslide_type">
                                    <option value="" hidden>Select Type..</option>
                                    <option>Flow Landslide</option>
                                    <option>Rock Fall</option>
                                    <option>Translation Slide</option>
                                    <option>Rotational Slide</option>

                                </select>

                            </div>

                            <div class="mb-5">
                                <label for="type_of_improvement_works"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of
                                    Improvement Works</label>
                                <select name="type_of_improvement_works" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-lime-500 focus:border-lime-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                    id="type_of_improvement_works">
                                    <option value="" hidden>Select Type..</option>
                                    <option>Preventive maintenance works</option>
                                    <option>Upgrading works</option>
                                    <option>Repair works to landslides</option>
                                </select>

                            </div>
                        </div>

                        <div>
                            <div class="mb-5">
                                <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                    Download Form
                                </h3>

                                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to
                                    over
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus quam commodi
                                    sed
                                    aut eaque qui recusandae possimus! Nam autem praesentium .</p>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-lime-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-lime-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"><svg
                                        class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                        <path
                                            d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                    </svg> Download</a>
                            </div>

                            <div class="border border-gray-300 rounded-lg p-3 mb-2">
                                <h2 class="font-bold text-lg mb-2">Slope Preservation Form</h2>
                                <input type="file" name="file_maintenance" class="filestyle"
                                    data-max-file-size="50MB" />
                                <div class="">
                                    <p>Upload Downloaded File Template</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <x-line />

                    <div x-data="{ selectedType: null }">
                        <!-- Type 1 -->
                        <div class="mb-4 border rounded p-4">
                            <div class="grid grid-cols-3 gap-4">
                                <div>
                                    <label class="block font-bold">
                                        <input type="radio" name="type" value="type1" @click="selectedType = 'type1'">
                                        Type 1
                                    </label>
                                </div>
                                <div x-bind:class="selectedType === 'type1' ? '' : 'opacity-50 pointer-events-none'">
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type1_objectives[]" value="surface_protection">
                                        Improve surface protection
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type1_objectives[]" value="surface_drainage">
                                        Improve surface drainage
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type1_objectives[]" value="local_stability">
                                        Improve local stability
                                    </label>
                                </div>
                                <div x-bind:class="selectedType === 'type1' ? '' : 'opacity-50 pointer-events-none'">
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type1_measures[]" value="surface_cover">
                                        1.1 Surface cover for soil slopes
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type1_measures[]" value="wire_mesh">
                                        1.2 Wire mesh/Face netting for rock slopes
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type1_measures[]" value="surface_protection">
                                        1.3 Surface protection for retaining walls
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type1_measures[]"
                                            value="surface_drainage_channels">
                                        1.4 Surface drainage channels
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type1_measures[]" value="resloping">
                                        1.5 Resloping
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type1_measures[]" value="dentition">
                                        1.6 Dentition
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Type 2 -->
                        <div class="mb-4 border rounded p-4">
                            <div class="grid grid-cols-3 gap-4">
                                <div>
                                    <label class="block font-bold">
                                        <input type="radio" name="type" value="type2" @click="selectedType = 'type2'">
                                        Type 2
                                    </label>
                                </div>
                                <div x-bind:class="selectedType === 'type2' ? '' : 'opacity-50 pointer-events-none'">
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type2_objectives[]" value="subsurface_drainage">
                                        Improve subsurface drainage
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type2_objectives[]"
                                            value="contingency_subsurface_drainage">
                                        Contingency subsurface drainage provisions
                                    </label>
                                </div>
                                <div x-bind:class="selectedType === 'type2' ? '' : 'opacity-50 pointer-events-none'">
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type2_measures[]" value="raking_drains">
                                        2.1 Raking drains
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type2_measures[]" value="toe_drains">
                                        2.2 Toe drains
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type2_measures[]" value="counterfort_drains">
                                        2.3 Counterfort drains (Slope Drain)
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type2_measures[]" value="relief_drains">
                                        2.4 Relief drains
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type2_measures[]" value="drainage_hard_surface">
                                        2.5 Drainage for hard surface cover
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type2_measures[]" value="no_fines_concrete_cover">
                                        2.6 No-fines concrete cover
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Type 3 -->
                        <div class="mb-4 border rounded p-4">
                            <div class="grid grid-cols-3 gap-4">
                                <div>
                                    <label class="block font-bold">
                                        <input type="radio" name="type" value="type3" @click="selectedType = 'type3'">
                                        Type 3
                                    </label>
                                </div>
                                <div x-bind:class="selectedType === 'type3' ? '' : 'opacity-50 pointer-events-none'">
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type3_objectives[]" value="structural_support">
                                        Provide structural support
                                    </label>
                                </div>
                                <div x-bind:class="selectedType === 'type3' ? '' : 'opacity-50 pointer-events-none'">
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type3_measures[]" value="soil_nails_slopes">
                                        3.1 Soil nails for soil cut slopes (Range of AFOS: I* / I / II / III *)
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type3_measures[]" value="soil_nails_toe_walls">
                                        3.2 Soil nails for soil cut slopes with toe walls (Range of AFOS: I* / I / II /
                                        III *)
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type3_measures[]"
                                            value="soil_nails_retaining_walls">
                                        3.3 Soil nails for concrete or masonry retaining walls (‘existing’ / ‘new’ *wall
                                        standard)
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type3_measures[]" value="skin_walls">
                                        3.4 Skin walls for masonry retaining walls
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type3_measures[]" value="concrete_buttresses">
                                        3.5 Concrete buttresses for rock cut slopes
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type3_measures[]" value="rock_dowels">
                                        3.6 Rock dowels for rock cut slopes
                                    </label>
                                    <label class="block mb-2">
                                        <input type="checkbox" name="type4_measures[]" value="other_structure">
                                        3.7 Other Slope Structure (concrete pile, steel pile, etc.)
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid gap-4 grid-cols-2">
                        <div class="border border-gray-300 rounded-lg p-3 mb-2">
                            <h2 class="font-bold text-lg mb-2">Documentation</h2>
                            <input type="file" multiple name="file_preservation" class="filestyle" data-max-files="3"
                                data-max-file-size="40MB" />
                            <div class="">
                                <p>Upload Documentation with Maximum : 3 Image</p>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block mb-2 font-medium text-gray-900 dark:text-white">
                                Slope Preservation Resume </label>
                            <textarea id="message" rows="7" name="note"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-lime-500 focus:border-lime-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-lime-500 dark:focus:border-lime-500"
                                placeholder="Write your resume.." required></textarea>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-form-layout>