<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slopes;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $select = Slopes::whereNotNull('geometry')
                        ->whereNotNull('characteristic')
                        ->whereNotNull('rating')
                        ->whereNotNull('ranking')
                        ->get()
                        ->first();
        $data = [
            'slopes' => slopes::whereNotNull('geometry')
                                ->whereNotNull('characteristic')
                                ->whereNotNull('rating')
                                ->whereNotNull('ranking')
                                ->get(),
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