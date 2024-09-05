<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slopes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ManagementController extends Controller
{
    public function index(Request $request)
    {
        $select = Slopes::whereNotNull('geometry')
                        ->whereNotNull('characteristic')
                        ->whereNotNull('rating')
                        ->whereNotNull('ranking')
                        ->get()
                        ->first();
        
        $slopes = Slopes::whereNotNull('geometry')
                        ->whereNotNull('characteristic')
                        ->whereNotNull('rating')
                        ->whereNotNull('ranking')
                        ->get();

        if($request->all() !== []){
            if ($request->filter == 'high') {
                $slopes = Slopes::whereNotNull('geometry')
                                ->whereNotNull('characteristic')
                                ->whereNotNull('rating')
                                ->whereNotNull('ranking')
                                ->orderBy(DB::raw('JSON_EXTRACT(ranking, "$.TS") + 0'), 'desc')
                                ->get();
            }
            if ($request->filter == 'low') {
                $slopes = Slopes::whereNotNull('geometry')
                                ->whereNotNull('characteristic')
                                ->whereNotNull('rating')
                                ->whereNotNull('ranking')
                                ->orderBy(DB::raw('JSON_EXTRACT(ranking, "$.TS") + 0'), 'asc')
                                ->get();
            }
            if ($request->filter == 'name') {
                $slopes = Slopes::whereNotNull('geometry')
                                ->whereNotNull('characteristic')
                                ->whereNotNull('rating')
                                ->whereNotNull('ranking')
                                ->orderBy('slope_name', 'asc')
                                ->get();
            }
        }
        $data = [
            'slopes' => $slopes,
            'sideA' => count(Slopes::where('side_of_road', 'A')->get()),
            'sideB' => count(Slopes::where('side_of_road', 'B')->get()),
            'selectedSlope' => $select,
        ];
        return view('management.index', $data);
    }

    public function get(Request $request)
    {
        $data = Slopes::where('slug',$request->slug)->first();
        return response()->json($data);
    }

    public function detail(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'geometry' => json_decode(Slopes::where('slug', $slug)->first()['geometry']),
            'characteristic' => json_decode(Slopes::where('slug', $slug)->first()['characteristic']),
            'rating' => json_decode(Slopes::where('slug', $slug)->first()['rating']),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
        ];
        return view('management.detail', $data);
    }
}