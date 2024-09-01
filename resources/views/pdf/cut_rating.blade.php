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
                Year of Formation/Treatment (Y) <br>
                <input type="radio" {{$rating->A1 == '6' ? 'checked="checked"' : '' }}> Y
                &#8804; 1980 <br>
                <input type="radio" {{$rating->A1 == '4' ? 'checked="checked"' : '' }}> 1980 &#60; Y &#8804;
                1990 <br>
                <input type="radio" {{$rating->A1 == '2' ? 'checked="checked"' : '' }}> 1990 &#60; Y &#8804;
                1995 <br>
                <input type="radio" {{$rating->A1 == '1' ? 'checked="checked"' : '' }}> Y > 1995 <br>

            </td>
            <td>
                <b>A1 : {{$rating->A1}}</b>
            </td>
        </tr>
        <tr>
            <td class="text-left" colspan="2">
                Level of Geotechnical Engineering Input <br>
                <input type="radio" {{$rating->A2 == '8' ? 'checked="checked"' : '' }}> Slopes with none or little
                geotechnical engineering input <br>
                <input type="radio" {{$rating->A2 == '6' ? 'checked="checked"' : '' }}> Slopes with indication of some
                geotechnical engineering input<br>
                <input type="radio" {{$rating->A2 == '2' ? 'checked="checked"' : '' }}> Slopes with indication of
                substantial geotechnical engineering input <br>
                <input type="radio" {{$rating->A2 == '1' ? 'checked="checked"' : '' }}> Slopes checked and accepted by
                GEO <br>

            </td>
            <td>
                <b>A2 : {{$rating->A2}}</b>
            </td>
        </tr>
        <tr>
            <td class="text-left" colspan="2">
                Geometry Classification <br>
                <input type="radio" {{$rating->A3 == '8' ? 'checked="checked"' : '' }}>
                S1 <br>
                <input type="radio" {{$rating->A3 == '4' ? 'checked="checked"' : '' }}>
                S2 <br>
                <input type="radio" {{$rating->A3 == '2' ? 'checked="checked"' : '' }}>
                S3 <br>
                <input type="radio" {{$rating->A3 == '1' ? 'checked="checked"' : '' }}>
                S4 <br>
            </td>
            <td>
                <b>A3 : {{$rating->A3}}</b>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-left">
                Slope Protection and Surface Drainage
                <table>
                    <thead>
                        <tr>
                            <th rowspan="2">
                                Surface Drainage
                            </th>
                            <th colspan="3">
                                Slope Protection
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Substantially Unprotected
                            </th>
                            <th>
                                Partially Protected
                            </th>
                            <th>
                                Substantially Protected
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Few or no channels, and potential for convergent flow of surface water above
                                crest or located on a drainage line or depression
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '1-1' ? 'checked="checked"'
                                : ''}}>
                                8
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '1-2' ? 'checked="checked"'
                                : ''}}>
                                4
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '1-3' ? 'checked="checked"'
                                : ''}}>
                                2
                            </td>
                        </tr>
                        <tr>
                            <td
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border border-gray-200">
                                Few or no channels
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '2-1' ? 'checked="checked"'
                                : ''}}>
                                4
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '2-2' ? 'checked="checked"'
                                : ''}}>
                                2
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '2-3' ?
                                'checked="checked"' : ''}}>
                                1.5
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Adequate channels
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '3-1' ? 'checked="checked"'
                                : ''}}>
                                2
                            </td>
                            <td>
                                <input type="radio" {{$rating->A4_pos == '3-2' ?
                                'checked="checked"' : ''}}>
                                1.5
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
            <td colspan="2" class="text-left">
                Site Characteristics
                <table>
                    <thead>
                        <tr>
                            <th rowspan="2">
                                Adverse
                                geological feature</th>
                            <th colspan="3">
                                Adverse
                                hydrogeological settings
                            </th>
                        </tr>
                        <tr>
                            <th>Significant</th>
                            <th>Moderate</th>
                            <th>Minor/None</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Significant</td>
                            <td>
                                <input type="radio" value="10" {{$rating->A5_pos == '1-1' ? 'checked="checked"' : ''}}>
                                10
                            </td>
                            <td>
                                <input type="radio" value="8" {{$rating->A5_pos == '1-2' ? 'checked="checked"' : ''}}> 8
                            </td>
                            <td>
                                <input type="radio" value="5" {{$rating->A5_pos == '1-3' ? 'checked="checked"' : ''}}> 5
                            </td>
                        </tr>
                        <tr>
                            <td>Moderate</td>
                            <td>
                                <input type="radio" value="8" {{$rating->A5_pos == '2-1' ? 'checked="checked"' : ''}}> 8
                            </td>
                            <td>
                                <input type="radio" value="3" {{$rating->A5_pos == '2-2' ? 'checked="checked"' : ''}}> 3
                            </td>
                            <td>
                                <input type="radio" value="2" {{$rating->A5_pos == '2-3' ? 'checked="checked"' : ''}}> 2
                            </td>
                        </tr>
                        <tr>
                            <td>Minor/None</td>
                            <td>
                                <input type="radio" value="5" {{$rating->A5_pos == '3-1' ? 'checked="checked"' : ''}}> 5
                            </td>
                            <td>
                                <input type="radio" value="2" {{$rating->A5_pos == '3-2' ? 'checked="checked"' : ''}}> 2
                            </td>
                            <td>
                                <input type="radio" value="1" {{$rating->A5_pos == '3-3' ? 'checked="checked"' : ''}}> 1
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td>
                <b>A5 : {{$rating->A5}}</b>
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