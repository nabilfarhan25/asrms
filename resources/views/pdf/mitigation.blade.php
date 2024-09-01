<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$mitigation->slope_name}}</title>
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
    <h3>FEATURE NO. "{{$mitigation->slope_name}} - {{$mitigation->created_at}}"</h3>
    <table>
        <tr>
            <th>
                Slope Condition
            </th>
        </tr>
        <tr>
            <td class="text-left">
                {{$mitigation->slope_condition}}
            </td>
        </tr>
        <tr>
            <th>
                Mitigation Strategy
            </th>
        </tr>
        <tr>
            <td class="text-left">
                {{$mitigation->mitigation_strategy}}
            </td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th>Work Item</th>
            <th>Volume</th>
            <th>Unit</th>
            <th>Unit Price</th>
            <th>Total Price</th>
        </tr>
        <tr>
            <th colspan="5" class="text-left">
                Routine Maintenance
            </th>
        </tr>
        <tr>
            <td class="text-left">
                Drainage Maintenance
            </td>
            <td>
                {{$data->drainage_maintenance_volume}}
            </td>
            <td>
                m
            </td>
            <td>
                {{$data->drainage_maintenance_price}}
            </td>
            <td>
                {{$data->drainage_maintenance_total}}
            </td>
        </tr>
        <tr>
            <td class="text-left">
                Vegetation Maintenance
            </td>
            <td>
                {{$data->vegetation_maintenance_volume}}
            </td>
            <td>
                m<sup>2</sup>
            </td>
            <td>
                {{$data->vegetation_maintenance_price}}
            </td>
            <td>
                {{$data->vegetation_maintenance_total}}
            </td>
        </tr>

        <tr>
            <th colspan="5" class="text-left">
                Drainage
            </th>
        </tr>
        <tr>
            <td class="text-left">
                Making Drainage
            </td>
            <td>
                {{$data->making_drainage_volume}}
            </td>
            <td>
                m
            </td>
            <td>
                {{$data->making_drainage_price}}
            </td>
            <td>
                {{$data->making_drainage_total}}
            </td>
        </tr>

        <tr>
            <th colspan="5" class="text-left">
                Re-Vegetation
            </th>
        </tr>
        <tr>
            <td class="text-left">
                Planting Vegetation
            </td>
            <td>
                {{$data->planting_vegetation_volume}}
            </td>
            <td>
                m<sup>2</sup>
            </td>
            <td>
                {{$data->planting_vegetation_price}}
            </td>
            <td>
                {{$data->planting_vegetation_total}}
            </td>
        </tr>
        <tr>
            <th colspan="5" class="text-left">
                Re-Construction of Slope Geometry
            </th>
        </tr>
        <tr>
            <td class="text-left">
                Re-Sloping with soil of choice
            </td>
            <td>
                {{$data->reslope_volume}}
            </td>
            <td>
                m<sup>3</sup>
            </td>
            <td>
                {{$data->reslope_price}}
            </td>
            <td>
                {{$data->reslope_total}}
            </td>
        </tr>
        <tr>
            <td class="text-left">
                Re-Grading
            </td>
            <td>
                {{$data->regrading_volume}}
            </td>
            <td>
                m<sup>3</sup>
            </td>
            <td>
                {{$data->regrading_price}}
            </td>
            <td>
                {{$data->regrading_total}}
            </td>
        </tr>
        <tr>
            <th colspan="5" class="text-left">
                Additional Structures
            </th>
        </tr>
        <tr>
            <td class="text-left">
                {{$data->additional_structures}}
            </td>
            <td>
                {{$data->additional_structures_volume}}
            </td>
            <td>
                m<sup>3</sup>
            </td>
            <td>
                {{$data->additional_structures_price}}
            </td>
            <td>
                {{$data->additional_structures_total}}
            </td>
        </tr>
        <tr>
            <th colspan="5" class="text-left">
                Additional Reinforcement
            </th>
        </tr>
        <tr>
            <td class="text-left">
                {{$data->additional_reinforcement}}
            </td>
            <td>
                {{$data->additional_reinforcement_volume}}
            </td>
            <td>
                m<sup>3</sup>
            </td>
            <td>
                {{$data->additional_reinforcement_price}}
            </td>
            <td>
                {{$data->additional_reinforcement_total}}
            </td>
        </tr>
    </table>
</body>

</html>