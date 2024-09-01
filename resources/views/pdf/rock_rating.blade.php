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
            <th colspan="3">
                INSTABILITY POTENTIAL (IP)
            </th>
        </tr>
        <tr>
            <td class="text-left" colspan="2">
                Level of Geotechnical Engineering Input<br>
                <input type="radio" {{$rating->A1 == '10' ? 'checked="checked"' : '' }}> Slopes with none or little
                geotechnical engineering input<br>
                <input type="radio" {{$rating->A1 == '3' ? 'checked="checked"' : '' }}> Slopes with indication of some
                geotechnical engineering input<br>
                <input type="radio" {{$rating->A1 == '1' ? 'checked="checked"' : '' }}> Slopes with indication of
                substantial geotechnical engineering input<br>

            </td>
            <td>
                <b>A1 : {{$rating->A1}}</b>
            </td>
        </tr>
        <tr>
            <td class="text-left" colspan="2">
                Geometry
                Feature Height
                Rock Slope Angle

            </td>
            <td>
                <b>A2 : {{$rating->A2}}</b>
            </td>
        </tr>
        <tr>
            <td class="text-left" colspan="2">
                Instability Classification<br>
            </td>
            <td>
                <b>A3 : {{$rating->A3}}</b>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-left">
                Seepage and Drainage Conditions
                <table>
                    <thead>
                        <tr>
                            <th rowspan="2">
                                DRAINAGE PROVISION
                            </th>
                            <th colspan="3">
                                SEEPAGE
                            </th>
                        </tr>
                        <tr>
                            <th>
                                HEAVY
                            </th>
                            <th>
                                MODERATE
                            </th>
                            <th>
                                SLIGHT OR NONE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Potential for convergence of runoff at crest area and/or potential for water ingress
                                into open discontinuities
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '1-1' ? 'checked="checked"'
                                : ''}}>
                                8
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '1-2' ? 'checked="checked"'
                                : ''}}>
                                6
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '1-3' ? 'checked="checked"'
                                : ''}}>
                                4
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Insufficient or no drainage measures in place to direct water away from the crest area
                                and face of the slope
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '2-1' ? 'checked="checked"'
                                : ''}}>
                                6
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '2-2' ? 'checked="checked"'
                                : ''}}>
                                4
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '2-3' ?
                                'checked="checked"' : ''}}>
                                2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Drainage measures adequately direct water away from the crest area and face of the slope
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '3-1' ? 'checked="checked"'
                                : ''}}>
                                4
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '3-2' ?
                                'checked="checked"' : ''}}>
                                2
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '3-3' ?
                                'checked="checked"' : ''}}>
                                1
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td>
                <b>A4 : {{$rating->A4}}</b>
            </td>
        </tr>

        <tr>
            <th colspan="3">
                ACTUAL PERFORMANCE (AP)
            </th>
        </tr>
        <tr>
            <td class="text-left" colspan="2">
                Signs of Distress <br>
                <input type="radio" {{$rating->B1 == '10' ? 'checked="checked"' : '' }}> Severe <br>
                <small>(signs of slope movement)</small> <br>
                <input type="radio" {{$rating->B1 == '4' ? 'checked="checked"' : '' }}> Moderate <br>
                <small>(extensive minor defects) </small><br>
                <input type="radio" {{$rating->B1 == '1' ? 'checked="checked"' : '' }}> Minor/None <br>
                <small>(none or few isolated minor defects)</small>
            </td>
            <td>
                <b>B1 : {{$rating->B1}}</b>
            </td>
        </tr>
        <tr>
            <td class="text-left" colspan="2">
                Instability after Slope Formation/Treatment <br>
                <input type="radio" {{$rating->B2 == '10' ? 'checked="checked"' : '' }}> Massive failures (> 500 m3)<br>
                <input type="radio" {{$rating->B2 == '5' ? 'checked="checked"' : '' }}> Major or repeated minor failures
                or records of previous severe signs of distress <br>
                <input type="radio" {{$rating->B2 == '2' ? 'checked="checked"' : '' }}> Minor failure or records of
                previous moderate signs of distress <br>
                <input type="radio" {{$rating->B2 == '1' ? 'checked="checked"' : '' }}> No failure or records of
                previous minor signs of distress <br>
            </td>
            <td>
                <b>B2 : {{$rating->B2}}</b>
            </td>
        </tr>
        <tr>
            <th colspan="3">
                FACILITIES ABOVE CREST OF FEATURE
            </th>
        </tr>
        <tr>
            <th class="text-left">Type of crest facility <br> (for roads and footpaths, give also the name)
            </th>
            <td>{{$geometry->crest_facility_type}}</td>
        </tr>
        <tr>
            <th class="text-left">Facility Group
            </th>
            <td>{{$geometry->crest_facility_group}}</td>
        </tr>
        <tr>
            <th class="text-left">Distance (D) <br> from crest of feature to crest
                facility
            </th>
            <td>{{$geometry->crest_d}}</td>
        </tr>
        <tr>
            <th class="text-left">Vulnerability Factor, C2
            </th>
            <td>{{$rating->C2}}</td>
        </tr>

        <tr>
            <th colspan="3">
                FACILITIES ABOVE TOE OF FEATURE
            </th>
        </tr>
        <tr>
            <th class="text-left">Type of toe facility <br> (for roads and footpaths, give also the name)
            </th>
            <td>{{$geometry->toe_facility_type}}</td>
        </tr>
        <tr>
            <th class="text-left">Facility Group
            </th>
            <td>{{$geometry->toe_facility_group}}</td>
        </tr>
        <tr>
            <th class="text-left">Distance (L) <br> from toe of feature to toe
                facility
            </th>
            <td>{{$geometry->toe_l}}</td>
        </tr>
        <tr>
            <th class="text-left">Shadow angle (ω) <br> from crest of feature to toe
                facility
            </th>
            <td>{{$geometry->toe_l}}</td>
        </tr>
        <tr>
            <th class="text-left">Vulnerability Factor, D2
            </th>
            <td>{{$rating->D2}}</td>
        </tr>
    </table>

    <pagebreak />

    <table>
        <tr>
            <th colspan="2">
                CALCULATED SCORES
            </th>
        </tr>
        <tr>
            <td>INSTABILITY SCORE (IS)</td>
            <td><b>{{$ranking->IS}}</b></td>
        </tr>
        <tr>
            <td>CONSEQUENCE SCORE (CS)</td>
            <td><b>{{$ranking->CS}}</b></td>
        </tr>
        <tr>
            <td>TOTAL SCORE (TS)</td>
            <td><b>{{$ranking->TS}}</b></td>
        </tr>
        <tr>
            <td>RANKING SCORE (RS)</td>
            <td><b>{{$ranking->TS*0.062,2}}</b></td>
        </tr>
    </table>
</body>

</html>