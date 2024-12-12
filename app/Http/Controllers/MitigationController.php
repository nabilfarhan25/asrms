<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mitigation;
use App\Models\Slopes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitigationController extends Controller
{
    public function index(Request $request)
    {
        $slopes = Slopes::whereNotNull('geometry')
                        ->whereNotNull('characteristic')
                        ->whereNotNull('rating')
                        ->whereNotNull('ranking')
                        ->get();

        if($request->all() !== []){

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
            'sideA' => count(Slopes::where('side_of_road', 'A')->get()),
            'sideB' => count(Slopes::where('side_of_road', 'B')->get()),
        ];
        return view('mitigation.index', $data);
    }
    public function detail(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug',$slug)->first(),
            'mitigations' => Mitigation::where('slug',$slug)->get(),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
            
        ];
        return view('mitigation.detail', $data);
    }
    public function mitigation(string $slug, $id)
    {
        $slug = Mitigation::where('id',$id)->first()->slug;
        $slope = Slopes::where('slug', $slug)->first();
        $data = [
            'slope' => $slope,
            'mitigations' => Mitigation::where('slug',$slug)->get(),
            'mitigation' => Mitigation::where('id',$id)->first(),
            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
            'estimate' => json_decode(Mitigation::where('id', $id)->first()['mitigation_estimate']),
        ];
        return view('mitigation.mitigation', $data);
    }
    public function create(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
        ];
        return view('mitigation.add', $data);
    }

    public function store(Request $request)
    {
       
        $slope = Slopes::where('slug', $request->slug)->first();

        $estimate = $request->all();
        unset($estimate['slug']);
        unset($estimate['slope_condition']);
        unset($estimate['mitigation_strategy']);
//dd($estimate);
        $mitigation = new Mitigation();
        $mitigation->slope_name = $slope->slope_name;
        $mitigation->slug = $slope->slug;
        $mitigation->slope_type = $slope->slope_type;
        $mitigation->slope_condition = $request->slope_condition;
        $mitigation->mitigation_strategy = $request->mitigation_strategy;
        $mitigation->mitigation_estimate = json_encode($estimate);

        $mitigation->author = Auth::user()->name;
        $mitigation->save();

        return redirect('/mitigation/'. $request->slug);
    }
    public function destroy(string $id){
        $item = Mitigation::where('id',$id)->first();
        $slug = $item->slug;
        $item->delete();
        return redirect('/mitigation/'.$slug)->with('success', 'Item deleted successfully.');

    }
}