<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Models\Slopes;

class InspectionController extends Controller
{
    public function index(Request $request)
    {
        $slopes = Slopes::whereNotNull('geometry')
                        ->whereNotNull('characteristic')
                        ->whereNotNull('rating')
                        ->whereNotNull('ranking')
                        ->get();

        if($request->all() !== []){
            if (isset($request->month)) {
                $slopes = Slopes::whereYear('engineer_inspection', date('Y'))
                ->orWhereYear('maintenance_inspection', date('Y'))
                ->whereMonth('engineer_inspection', $request->month)
                ->WhereMonth('maintenance_inspection', $request->month)

                ->whereNotNull('geometry')
                ->whereNotNull('characteristic')
                ->whereNotNull('rating')
                ->whereNotNull('ranking')
                ->get();
            }
            if (isset($request->year)) {
                $slopes = Slopes::whereYear('engineer_inspection', $request->year)
                ->orWhereYear('maintenance_inspection', $request->year)
                
                ->whereNotNull('geometry')
                ->whereNotNull('characteristic')
                ->whereNotNull('rating')
                ->whereNotNull('ranking')
                ->get();
            }

            if (isset($request->search)) {
                $slopes = Slopes::where('slope_name','LIKE', '%'.$request->search.'%')
                
                ->whereNotNull('geometry')
                ->whereNotNull('characteristic')
                ->whereNotNull('rating')
                ->whereNotNull('ranking')
                ->get();
            }
        }
        $data = [
            'slopes' => $slopes,
            'selected' => [ 
                'month' => $request->month,
                'year' => $request->year,
            ],
        ];
        return view('inspection.index', $data);
    }

    public function detail(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'maintenance' => Maintenance::where('slug', $slug)->orderBy('date_of_maintenance', 'desc')->first(),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
        ];
        return view('inspection.detail', $data);
    }

}