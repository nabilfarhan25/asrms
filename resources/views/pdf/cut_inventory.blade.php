<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$slope->slope_name}}</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
            text-align: center;
        }

        .text-left {
            padding: 5px;
            text-align: left;
        }

        .section-title {
            text-align: left;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h3>FEATURE NO. "{{$slope->slope_name}}" (Page 1 of 6)</h3>
    <table>
        <tr>
            <td class="section-title">SECTION :</td>
            <td>
                <div>
                    <input type="radio"> 1-1 (Most
                    Severe Consequence)
                </div>
            </td>
            <td>
                <div>
                    <input type="radio" {{isset($geometry->section) ? 'checked="checked"' : '' }}> 2-2 (Maximum Feature
                    Height)
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">Check if Hf ≥ 75% Hfs. If yes, consider Section-1 only; If No, consider both Sections 1-1
                and 2-2</td>
        </tr>
        <tr>
            <th rowspan="2">Geometry (refer to Figure A1)</th>
            <th>Section 1-1</th>
            <th>Section 2-2</th>
        </tr>
        <tr>
            <th colspan="2">Value</th>
        </tr>
        <tr>
            <td class="section-title">Soil Slope Height, Hs</td>
            <td>{{$geometry->soil_slope_height}} m</td>
            <td>{{isset($geometry->soil_slope_height_2) ? $geometry->soil_slope_height_2.' m' : '-'}}</td>
        </tr>
        <tr>
            <td class="section-title">Rock Slope Height, Hr</td>
            <td>{{$geometry->rock_slope_height}} m</td>
            <td>{{isset($geometry->rock_slope_height_2) ? $geometry->rock_slope_height_2.' m' : '-'}}</td>
        </tr>
        <tr>
            <td class="section-title">Crest Wall Height, Hcw</td>
            <td>{{$geometry->crest_wall_height}} m</td>
            <td>{{isset($geometry->crest_wall_height_2) ? $geometry->crest_wall_height_2.' m' : '-'}}</td>
        </tr>
        <tr>
            <td class="section-title">Toe Wall Height, Htw</td>
            <td>{{$geometry->toe_wall_height}} m</td>
            <td>{{isset($geometry->toe_wall_height_2) ? $geometry->toe_wall_height_2.' m' : '-'}}</td>
        </tr>
        <tr>
            <td class="section-title">Upslope Angle, β</td>
            <td>{{$geometry->upslope_angle}} deg</td>
            <td>{{isset($geometry->upslope_angle_2) ? $geometry->upslope_angle_2.' deg' : '-'}}</td>
        </tr>
        <tr>
            <td class="section-title">Surcharge above the Slope Crest, s</td>
            <td>{{$geometry->surchange_above_slope_crest}} kPa</td>
            <td>{{isset($geometry->surchange_above_slope_crest_2) ? $geometry->surchange_above_slope_crest_2.' kPa' :
                '-'}}
            </td>
        </tr>
        <tr>
            <td class="section-title">Soil Slope Angle, θ<sub>s</sub></td>
            <td>{{$geometry->soil_slope_angle}} deg</td>
            <td>{{isset($geometry->soil_slope_angle_2) ? $geometry->soil_slope_angle_2.' deg' :
                '-'}}
            </td>
        </tr>
        <tr>
            <td class="section-title">Average Slope Angle, θ</td>
            <td>{{$geometry->average_slope_angle}} deg</td>
            <td>{{isset($geometry->average_slope_angle_2) ? $geometry->average_slope_angle_2.' deg' :
                '-'}}
            </td>
        </tr>
        <tr>
            <td class="section-title">Downslope Gradient, α</td>
            <td>{{$geometry->downslope_gradient}} deg</td>
            <td>{{isset($geometry->downslope_gradient_2) ? $geometry->downslope_gradient_2.' deg' :
                '-'}}
            </td>
        </tr>
        <tr>
            <td class="section-title">Soil Bulk Unit Weight, γb</td>
            <td colspan="2">{{$geometry->soil_bulk_unit_weight}} kN/m<sup>3</sup></td>
        </tr>
        <tr>
            <td class="section-title">Feature Height, H</td>
            <td>{{$geometry->feature_height}} m</td>
            <td>{{isset($geometry->feature_height_2) ? $geometry->feature_height_2.'m' : '-'}}</td>
        </tr>
    </table>
    <h2>Affected Facilities</h2>
    <table>
        <tr>
            <th>Section 1-1</th>
            <th>Facility Type (for roads, please give name)</th>
            <th>Facility Group</th>
            <th>Proximity</th>
        </tr>
        <tr>
            <td>Toe</td>
            <td>{{$geometry->toe_facility_type}}</td>
            <td>{{$geometry->toe_facility_group}}</td>
            <td>L = {{$geometry->toe_l}} m <br> &#969; = {{$geometry->toe_w}} deg</td>
        </tr>
        <tr>
            <td>Crest</td>
            <td>{{$geometry->crest_facility_type}}</td>
            <td>{{$geometry->crest_facility_group}}</td>
            <td>D = {{$geometry->crest_d}} m</td>
        </tr>
        <tr>
            <th>Section 2-2</th>
            <th>Facility Type (for roads, please give name)</th>
            <th>Facility Group</th>
            <th>Proximity</th>
        </tr>
        <tr>
            <td>Toe</td>
            <td>{{isset($geometry->toe_facility_type_2) ? $geometry->toe_facility_type_2 : '-'}}</td>
            <td>{{isset($geometry->toe_facility_group_2) ? $geometry->toe_facility_group_2
                : '-'}}</td>
            <td>L = {{isset($geometry->toe_l_2) ? $geometry->toe_l_2
                : '-'}} m <br> &#969; = {{isset($geometry->toe_w_2) ?
                $geometry->toe_w_2
                : '-'}} deg</td>
        </tr>
        <tr>
            <td>Crest</td>
            <td>{{isset($geometry->crest_facility_type_2) ? $geometry->crest_facility_type_2 : '-'}}</td>
            <td>{{isset($geometry->crest_facility_group_2) ? $geometry->crest_facility_group_2
                : '-'}}</td>
            <td>D = {{isset($geometry->crest_d_2) ? $geometry->crest_d_2 : '-'}} m</td>
        </tr>
    </table>

    <pagebreak />

    <table>
        <tr>
            <th colspan="2">FEATURE NO. "{{$slope->slope_name}}" (Page 2 of 6)</th>
        </tr>
        <tr>
            <th>SLOPE CHARACTERISTICS</th>
            <th>SITE OBSERVATIONS/FINDINGS</th>
        </tr>
        <tr>
            <td>
                Slope Protection
            </td>
            <td class="text-left">
                Surface cover with<br>
                <input type="checkbox"> Vegetation ____ % (including grass/shrubs/trees)<br>
                <input type="checkbox"> Hard cover ____ % (including concrete/bitumen)<br>
                <input type="checkbox" {{stripos($characteristic->surface_cover,'Bare surface') ? 'checked="checked"' :
                ''}}> Bare surface ____ %<br>
                <input type="checkbox" {{stripos($characteristic->surface_cover,'Other') ? 'checked="checked"' : ''
                }}> Others ___________<br>
                <b>{{$characteristic->surface_cover}}</b><br>
                <br>

                <ol>
                    <li>Based on above, slope surface is<br>
                        <input type="radio"> Substantially protected (≥ 75%)<br>
                        <input type="radio"> Partially protected (25% - 75%)<br>
                        <input type="radio"> Substantially unprotected (< 25%)<br>
                            <b>{{$characteristic->slope_surface}}</b><br>
                    </li>
                    <br>

                    <li>Zone(s) of depression or potential ponding exist within the crest area (within H/2)<br>
                        <input type="radio" {{$characteristic->zone_of_depression =='Yes' ? 'checked="checked"'
                        : ''}}> Yes<br>
                        <input type="radio" {{$characteristic->zone_of_depression =='No' ? 'checked="checked"'
                        : ''}}> No<br>
                        If yes, mark the extent of depression or ponding zones on plan and adapt the score of the
                        next
                        higher category in slope protection
                    </li>
                </ol>
            </td>
        </tr>
        <tr>
            <td>Surface Drainage Provision</td>
            <td class="text-left">
                <table>
                    <tr>
                        <th>Location</th>
                        <th>Size (mm)</th>
                        <th>Spacing (m)</th>
                        <th>Type (e.g. U-channel, step channel, downpipes or ditch)</th>
                        <th>Adequate Capacity (Y/N)</th>
                        <th>Remarks</th>
                    </tr>
                    <tr>
                        <td>Crest</td>
                        <td>{{$characteristic->crest_size !== null ? $characteristic->crest_size : '-' }}</td>
                        <td>{{$characteristic->crest_spacing !== null ? $characteristic->crest_spacing : '-' }}</td>
                        <td>{{$characteristic->crest_type !== null ? $characteristic->crest_type : '-' }}</td>
                        <td>{{$characteristic->crest_adequante !== null ? $characteristic->crest_adequante : '-' }}</td>
                        <td>{{$characteristic->crest_remarks !== null ? $characteristic->crest_remarks : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Berm</td>
                        <td>{{$characteristic->berm_size !== null ? $characteristic->berm_size : '-' }}</td>
                        <td>{{$characteristic->berm_spacing !== null ? $characteristic->berm_spacing : '-' }}</td>
                        <td>{{$characteristic->berm_type !== null ? $characteristic->berm_type : '-' }}</td>
                        <td>{{$characteristic->berm_adequante !== null ? $characteristic->berm_adequante : '-' }}</td>
                        <td>{{$characteristic->berm_remarks !== null ? $characteristic->berm_remarks : '-' }}</td>
                    </tr>
                    <tr>
                        <td>On Slope</td>
                        <td>{{$characteristic->onslope_size !== null ? $characteristic->onslope_size : '-' }}</td>
                        <td>{{$characteristic->onslope_spacing !== null ? $characteristic->onslope_spacing : '-' }}</td>
                        <td>{{$characteristic->onslope_type !== null ? $characteristic->onslope_type : '-' }}</td>
                        <td>{{$characteristic->onslope_adequante !== null ? $characteristic->onslope_adequante : '-' }}
                        </td>
                        <td>{{$characteristic->onslope_remarks !== null ? $characteristic->onslope_remarks : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Toe</td>
                        <td>{{$characteristic->toe_size !== null ? $characteristic->toe_size : '-' }}</td>
                        <td>{{$characteristic->toe_spacing !== null ? $characteristic->toe_spacing : '-' }}</td>
                        <td>{{$characteristic->toe_type !== null ? $characteristic->toe_type : '-' }}</td>
                        <td>{{$characteristic->toe_adequante !== null ? $characteristic->toe_adequante : '-' }}</td>
                        <td>{{$characteristic->toe_remarks !== null ? $characteristic->toe_remarks : '-' }}</td>
                    </tr>
                </table>
                <p class="">
                    <input type="checkbox"> Potential surface runoff converge onto the crest area due to topography
                    (observed or inferred from topographic plan or aerial photos)<br>
                    <input type="checkbox"> Slope located on a drainage line/zone of depression<br>
                    <input type="checkbox"> Inadequate surface drainage evident by surface erosion or erosion gully,
                    etc.<br>
                    <input type="checkbox"> Others observations/records : ______________________________________
                </p>
                <b>{{isset($characteristic->surface_drainage_provision) ? $characteristic->surface_drainage_provision :
                    ''}}</b><br>
                <br>

            </td>
        </tr>
        <tr>
            <td>Hydrogeological Settings<br>
                (Provide photographic records of signs of seepage and indicate location & extent on plan &
                cross-sections)
            </td>
            <td class="text-left">Signs of Seepage?<br>
                <input type="radio" {{$characteristic->signs_of_seepage =='Yes' ? 'checked="checked"'
                : ''}}> Yes<br>
                <input type="radio" {{$characteristic->signs_of_seepage =='No' ? 'checked="checked"'
                : ''}}> No<br>
                If Yes, provide following details<br>
                <table>
                    <tr>
                        <th>Seepage Location</th>
                        <th>Condition of seepage</th>
                    </tr>
                    <tr>
                        <td>At or above mid-height</td>
                        <td class="text-left">
                            <input type="radio" {{(isset($characteristic->above_mid_height) &&
                            $characteristic->above_mid_height === 'copious') ?
                            'checked="checked"' :
                            ''}}> Copious<br>
                            <input type="radio" {{(isset($characteristic->above_mid_height) &&
                            $characteristic->above_mid_height === 'trickling/damp') ?
                            'checked="checked"' :
                            ''}}>
                            Trickling/damp<br>
                            <input type="radio" {{(isset($characteristic->above_mid_height) &&
                            $characteristic->above_mid_height === 'stain') ?
                            'checked="checked"' :
                            ''}}> Stain<br>
                        </td>
                    </tr>
                    <tr>
                        <td>Below mid-height</td>
                        <td class="text-left">
                            <input type="radio" {{(isset($characteristic->below_mid_height) &&
                            $characteristic->below_mid_height === 'copious') ?
                            'checked="checked"' :
                            ''}}> Copious<br>
                            <input type="radio" {{(isset($characteristic->below_mid_height) &&
                            $characteristic->below_mid_height === 'trickling/damp') ?
                            'checked="checked"' :
                            ''}}>
                            Trickling/damp<br>
                            <input type="radio" {{(isset($characteristic->below_mid_height) &&
                            $characteristic->below_mid_height === 'stain') ?
                            'checked="checked"' :
                            ''}}> Stain<br>
                        </td>
                    </tr>
                </table>
                Others observations/records : {{isset($characteristic->other_signs) ? $characteristic->other_signs :
                '_______________'}}
            </td>
        </tr>
        <tr>
            <td>Geological Features<br>
                (Provide photographic records of the site observations)
            </td>
            <td class="text-left">Presence of the following based on site observations & available records (please
                tick):<br>
                <input type="checkbox" checked> No potential adverse geological features observed or recorded<br>
                <input type="checkbox"> Possible relict failure (concave shaped profile)<br>
                <input type="checkbox"> Shear surfaces/zone<br>
                <input type="checkbox"> Clay or silt filled discontinuities<br>
                <input type="checkbox"> Slickensided discontinuities<br>
                <input type="checkbox"> Discontinuities heavily coated with dark minerals or kaolinite<br>
                <input type="checkbox"> Significantly kaolinised granite or volcanics<br>
                <input type="checkbox"> Weathered dykes/sedimentary layers within volcanic formations<br>
                <input type="checkbox"> Others: __________________ <br>
                <b>{{$characteristic->geological_features}}</b><br>
            </td>
        </tr>
    </table>

</body>

</html>