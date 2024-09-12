<x-form-layout>
    <div class="p-5">
        <div
            class="flex justify-between items-center p-3 sm:p-5 mb-5 bg-white border border-gray-200 shadow-sm rounded-2xl">
            <div>
                <!-- Breadcrumb -->
                @php
                $bread = [
                ['url' => '/inventory', 'label' => 'Slope Inventory'],
                ['url' => '', 'label' => 'Create - '.$slope->slope_name,'active' => true],

                ];
                @endphp
                <x-bread :items="$bread" />

            </div>
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

        <div class="max-w-7xl mx-auto lg:px-8 space-y-6">
            <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-2xl" x-data="formHandler()">
                <form action="" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="slug" value="{{$slope->slug}}">

                    <div class="flex justify-between">
                        <div>
                            <h2 class="font-bold text-xl mb-3">
                                <span class="text-gray-600">FEATURE NO : </span>{{$slope->slope_name}}
                            </h2>
                            <x-slope-type type="{{$slope->slope_type}}" side="{{$slope->side_of_road}}" />
                        </div>
                        <div>
                            <x-primary-button>Next</x-primary-button>
                        </div>
                    </div>
                    <x-line />

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
                            <input type="checkbox" name="section" value="use" id="section2Toggle"
                                x-model="section2Enabled"
                                class="w-4 h-4 text-lime-600 bg-gray-100 border-gray-300 rounded focus:ring-lime-500 dark:focus:ring-lime-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="section2Toggle"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">2-2
                                (Maximum Feature Height)</label>
                        </div>
                    </div>
                    <x-line />

                    @if ($slope->slope_type === 'cut-type')
                    @include('inventory.partials.add_cut_geometry')
                    @elseif ($slope->slope_type === 'rock-type')
                    @include('inventory.partials.add_rock_geometry')
                    @elseif ($slope->slope_type === 'fill-type')
                    @include('inventory.partials.add_fill_geometry')
                    @elseif ($slope->slope_type === 'retaining-type')
                    @include('inventory.partials.add_retaining_geometry')
                    @elseif ($slope->slope_type === 'combine-type')
                    @include('inventory.partials.add_combine_geometry')
                    @endif
                </form>
            </div>

            @if ($slope->slope_type == 'cut-type')
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

            @elseif ($slope->slope_type == 'fill-type')
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

            @elseif ($slope->slope_type == 'rock-type')
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

            @elseif ($slope->slope_type == 'retaining-type')
            <script>
                function formHandler() {
                            return {
                                wall_height: {{isset($geometry->wall_height) ? $geometry->wall_height : 0}},
                                wall_height_2: {{isset($geometry->wall_height_2) ? $geometry->wall_height_2 : 0}},
                                rock_slope_height: {{isset($geometry->rock_slope_height) ? $geometry->rock_slope_height : 0}},
                                rock_slope_height_2: {{isset($geometry->rock_slope_height_2) ? $geometry->rock_slope_height_2 : 0}},
                                soil_slope_height: {{isset($geometry->soil_slope_height) ? $geometry->soil_slope_height : 0}},
                                soil_slope_height_2: {{isset($geometry->soil_slope_height_2) ? $geometry->soil_slope_height_2 : 0}},
                                upslope_angle: {{isset($geometry->upslope_angle) ? $geometry->upslope_angle : 0}},
                                upslope_angle_2: {{isset($geometry->upslope_angle_2) ? $geometry->upslope_angle_2 : 0}},
                                wall_face_angle: {{isset($geometry->wall_face_angle) ? $geometry->wall_face_angle : 0}},
                                wall_face_angle_2: {{isset($geometry->wall_face_angle_2) ? $geometry->wall_face_angle_2 : 0}},
                                surcharge_crest: {{isset($geometry->surcharge_crest) ? $geometry->surcharge_crest : 0}},
                                surcharge_crest_2: {{isset($geometry->surcharge_crest_2) ? $geometry->surcharge_crest_2 : 0}},
                                base_width: {{isset($geometry->base_width) ? $geometry->base_width : 0}},
                                base_width_2: {{isset($geometry->base_width_2) ? $geometry->base_width_2 : 0}},
                                average_wall: {{isset($geometry->average_wall) ? $geometry->average_wall : 0}},
                                average_wall_2: {{isset($geometry->average_wall_2) ? $geometry->average_wall_2 : 0}},
                                soil_bulk_unit_weight: {{isset($geometry->soil_bulk_unit_weight) ? $geometry->soil_bulk_unit_weight : 1}},
                                section2Enabled: {{isset($geometry->section) ? 'true' : 'false'}},
        
                                get featureHeight1() {
                                    return this.soil_slope_height + this.rock_slope_height + this.wall_height ;
                                },
                                get featureHeight2() {
                                    return this.soil_slope_height_2 + this.rock_slope_height_2 + this.wall_height_2;
                                },
                                get effectiveHeight1() {
                                    return this.wall_height * (1 + 0.35 * Math.tan(this.upslope_angle * Math.PI / 180)) + this.surcharge_crest / this.soil_bulk_unit_weight;
                                },
                                get effectiveHeight2() {
                                    return this.wall_height_2 * (1 + 0.35 * Math.tan(this.upslope_angle_2 * Math.PI / 180)) + this.surcharge_crest_2 / this.soil_bulk_unit_weight;
                                },
                                get HB1() {
                                    if (this.base_width === 0) {
                                        if (this.effectiveHeight1 === 0) {
                                            return 0;
                                        } else {
                                            return 0;
                                        }
                                    }
                                    return this.effectiveHeight1 / this.base_width;
                                },
                                get HB2() {
                                    if (this.base_width_2 === 0) {
                                        if (this.effectiveHeight2 === 0) {
                                            return 0;
                                        } else {
                                            return 0;
                                        }
                                    }
                                    return this.effectiveHeight2 / this.base_width_2;
                                },
                            }
                        }
            </script>

            @elseif ($slope->slope_type == 'combine-type')
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
            @endif
        </div>
    </div>
</x-form-layout>