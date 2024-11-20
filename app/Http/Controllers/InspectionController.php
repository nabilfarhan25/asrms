<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inspection;
use App\Models\Maintenance;
use Illuminate\Http\Request;
use App\Models\Slopes;
use App\Models\TemporaryFile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

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
            'maintenance' => Maintenance::where('slug', $slug)->latest('created_at')->first(),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
        ];
        return view('inspection.detail', $data);
    }

    public function inspection(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'inspections' => Inspection::where('slug', $slug)->latest('created_at')->get(),
            'maintenance' => Maintenance::where('slug', $slug)->latest('created_at')->first(),

        ];
        return view('inspection.inspection', $data);
    }

    public function detail_inspection(string $slug, string $id)
    {
        $slope = Slopes::where('slug', $slug)->first();
        $slp = Inspection::where('id', $id)->first();


        $data = [
            'slope' => $slope,
            'slp' => $slp,

            'geometry' => json_decode(Inspection::where('id', $id)->first()['geometry']),
            'characteristic' => json_decode(Inspection::where('id', $id)->first()['characteristic']),

            'img' => json_decode(Inspection::where('id', $id)->first()['img']),
        ];
        return view('inspection.detail_inspection', $data);
    }

    public function maintenance(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'maintenance' => Maintenance::where('slug', $slug)->latest('created_at')->first(),
            'maintenances' => Maintenance::where('slug', $slug)->get(),
        ];
        return view('inspection.maintenance',$data);
    }

    public function create_geometry(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'geometry' => json_decode(Slopes::where('slug', $slug)->first()['geometry']),
        ];

        // Reseting Files
        $plan_file = TemporaryFile::where('type','plan')->first();
        if (isset($plan_file)) {
            Storage::deleteDirectory('temp/' . $plan_file->file);
            $plan_file->delete();
        }
        $cross_file = TemporaryFile::where('type','cross')->first();
        if (isset($cross_file)) {
            Storage::deleteDirectory('temp/' . $cross_file->file);
            $cross_file->delete();
        }
        
        return view('inspection.geometry', $data);
    }

    public function store_geometry(Request $request)
    {
        $geo = $request->all();
        unset($geo['_token']);

        //dd($geo);
        $request->session()->put('geometry', $geo);
        return redirect('/inspection/characteristic/' . $request->slug);
    }

    public function create_characteristic(Request $request)
    {
        $geo = $request->session()->get('geometry');
        $data = [
            'slope' => Slopes::where('slug', $geo['slug'])->first(),
            'characteristic' => json_decode(Slopes::where('slug', $geo['slug'])->first()['characteristic']),

        ];

        // Reseting Files
        $img_slope_protection_file = TemporaryFile::where('type','img_slope_protection')->get();
        if (isset($img_slope_protection_file)) {
            foreach ($img_slope_protection_file as $img) {
                Storage::deleteDirectory('temp/' . $img->file);
            }
            $img_slope_protection_file->each->delete();
        }
        $img_surface_drainage_provision_file = TemporaryFile::where('type','img_surface_drainage_provision')->get();
        if (isset($img_surface_drainage_provision_file)) {
            foreach ($img_surface_drainage_provision_file as $img) {
                Storage::deleteDirectory('temp/' . $img->file);
            }
            $img_surface_drainage_provision_file->each->delete();
        }
        $img_hydrogeological_settings_file = TemporaryFile::where('type','img_hydrogeological_settings')->get();
        if (isset($img_hydrogeological_settings_file)) {
            foreach ($img_hydrogeological_settings_file as $img) {
                Storage::deleteDirectory('temp/' . $img->file);
            }
            $img_hydrogeological_settings_file->each->delete();
        }
        $img_geological_features_file = TemporaryFile::where('type','img_geological_features')->get();
        if (isset($img_geological_features_file)) {
            foreach ($img_geological_features_file as $img) {
                Storage::deleteDirectory('temp/' . $img->file);
            }
            $img_geological_features_file->each->delete();
        }
        $img_signs_of_distress_file = TemporaryFile::where('type','img_signs_of_distress')->get();
        if (isset($img_signs_of_distress_file)) {
            foreach ($img_signs_of_distress_file as $img) {
                Storage::deleteDirectory('temp/' . $img->file);
            }
            $img_signs_of_distress_file->each->delete();
        }
        $img_instability_after_file = TemporaryFile::where('type','img_instability_after')->get();
        if (isset($img_instability_after_file)) {
            foreach ($img_instability_after_file as $img) {
                Storage::deleteDirectory('temp/' . $img->file);
            }
            $img_instability_after_file->each->delete();
        }

        return view('inspection.characteristic', $data);
    }

    public function store_characteristic(Request $request)
    {
        $char = $request->all();
        unset($char['_token']);

        //dd($char);
        $request->session()->put('characteristic', $char);
        return redirect('/inspection/rating/' . $request->slug);
    }

    public function create_rating(Request $request)
    {
        $geo = $request->session()->get('geometry');
        $char = $request->session()->get('characteristic');

        $data = [
            'slope' => Slopes::where('slug', $geo['slug'])->first(),
            'geometry' => $geo,
            'characteristic' => $char,
            'rating' => json_decode(Slopes::where('slug', $geo['slug'])->first()['rating']),

        ];

        return view('inspection.rating', $data);
    }

    public function store_rating(Request $request)
    {
        $slope = Slopes::where('slug',$request->slug)->first();
        $rat = $request->all();
        unset($rat['_token']);
        $request->session()->put('rating', $rat);

        $geometry = $request->session()->get('geometry');
        $characteristic = $request->session()->get('characteristic');
        $rating = $request->session()->get('rating');

        if ($slope->slope_type == 'cut-type' || $slope->slope_type == 'combine-type') {
            $IS = $rating['A1'] * $rating['A2'] * $rating['A3'] * $rating['A4'] * $rating['A5'] * $rating['B1'] * $rating['B2'];
            $CS = (($rating['C1'] * $rating['C2']) + ($rating['D1'] * $rating['D2'])) * $geometry['feature_height'];
        }else if($slope->slope_type == 'rock-type'){
            $IS = $rating['A1'] * $rating['A2'] * $rating['A3'] * $rating['A4'] * $rating['B1'] * $rating['B2'];
            $K = 1;
            if (isset($request['scale_of_failure'])) {
                if ($request['scale_of_failure'] === "Large") {
                    $K = 5;
                } elseif ($request['scale_of_failure'] === "Medium") {
                    $K = 3;
                } elseif ($request['scale_of_failure'] === "Small") {
                    $K = 1;
                } else {
                    $K = 1;
                }
            }
            $CS = (($rating['C1'] * $rating['C2']) + ($rating['D1'] * $rating['D2'])) * $K;
        }else if($slope->slope_type == 'fill-type')
        {
            $IS1 = $rating['A1'] * $rating['A2'] * $rating['B1'] * $rating['B2'];
            $IS2 = $rating['A1'] * $rating['A3'] * $rating['B1'] * $rating['B2'];
            $IS3 = $rating['A1'] * $rating['A4'] * $rating['B1'] * $rating['B2'];

            $CS1 = (($rating['C1'] * $rating['C21']) + ($rating['D1'] * $rating['D21'])) * $geometry['feature_height'];
            $CS2 = (($rating['C1'] * $rating['C22']) + ($rating['D1'] * $rating['D22'])) * $geometry['feature_height'];
            $CS3 = (($rating['C1'] * $rating['C23']) + ($rating['D1'] * $rating['D23'])) * $geometry['feature_height'];

        }else if($slope->slope_type == 'retaining-type')
        {
            $IS = $rating['A1'] * $rating['A2'] * $rating['A3'] * $rating['A4'] * $rating['A5'] * $rating['B1'] * $rating['B2'];
            $CS = (($rating['C1'] * $rating['C2']) + ($rating['D1'] * $rating['D2'])) * $geometry['feature_height'];
        }
         else {
            $IS = 1;
            $CS = 1;

        }
        $ranking = [];
        if ($slope->slope_type == 'fill-type') {
                $TS = ($IS1 * $CS1) + ($IS2 * $CS2) + ($IS3 * $CS3);
                $ranking =  [
                'IS1' => $IS1,
                'IS2' => $IS2,
                'IS3' => $IS3,
                'CS1' => $CS1,
                'CS2' => $CS2,
                'CS3' => $CS3,

                'IS' => '-',
                'CS' => '-',
                'TS' => $TS,
                'RS' => $TS * 0.006,
            ];
        } else {
            $TS = $IS * $CS;

            // Ranking Score
            $RS = 0;
            if ($slope->slope_type == 'cut-type') {
                $RS = $TS * 0.063;
            } else if($slope->slope_type == 'rock-type'){
                $RS = $TS * 0.022;
            } else if($slope->slope_type == 'retaining-type'){
                $RS = $TS * 0.027;
            }
            else if($slope->slope_type == 'combine-type'){
                $RS = ($TS * 0.063) + ($TS * 0.027);
            } else {
                $RS = '-';
            }
            $ranking = [
            'IS' =>$IS,
            'CS' =>$CS,
            'TS' =>$TS,
            'RS' =>$RS,
        ];
        }

        $cons = $request->consequence_to_life;
        if ($cons == 'category-1') {
            $inspection_date = 5;
            $maintenance_date = 1;
        } else if($cons == 'category-2'){
            $inspection_date = 5;
            $maintenance_date = 1;
        }else if($cons == 'category-3'){
            $inspection_date = 10;
            $maintenance_date = 2;
        }
 
        // Buckup System
        // $im = json_decode($slope->img);
        // foreach($im as $m){
        //     Storage::move($request->slug.'/' . $m->file, $request->slug.'/'.str_replace('/','',Carbon::now()->toDateString()).'_'.$request->slug.'/'. $m->file);
        // }

        // File Handling
        $img = TemporaryFile::all();
        $dir = TemporaryFile::select(['img', 'file','type'])->get();
        
        foreach ($img as $i) {
            Storage::move('temp/' . $i->file, $request->slug.'/inspection/'. $i->file);
            TemporaryFile::find($i->id)->delete();
        }

        $inspection = new Inspection();
        $inspection->slope_name = $slope->slope_name;
        $inspection->slug = $slope->slug;
        $inspection->slope_type = $slope->slope_type;
        $inspection->date_of_inspection = Carbon::now();
        $inspection->weather_condition = $geometry['weather_condition'];
        $inspection->geometry = json_encode($geometry);
        $inspection->characteristic = json_encode($characteristic);
        $inspection->rating =json_encode($rating);
        $inspection->ranking = json_encode($ranking);
        $inspection->img = json_encode($dir);
        $inspection->engineer_inspection = Carbon::now()->addYear($inspection_date);
        $inspection->maintenance_inspection = Carbon::now()->addYear($maintenance_date);
        $inspection->save();

        // $slope = Slopes::where('slug', $request->slug)->firstOrFail();
        // $slope->geometry = $geometry;
        // $slope->characteristic = $characteristic;
        // $slope->rating = $rating;
        // $slope->ranking = json_encode($ranking);
        // $slope->img = json_encode($dir);
        // $slope->engineer_inspection = Carbon::now()->addYear($inspection_date);
        // //$slope->maintenance_inspection = Carbon::now()->addYear($maintenance_date);

        // $slope->save();

        $request->session()->forget(['geometry', 'characteristic', 'rating']);
        return redirect('/engineer-inspection/'.$request->slug);
    }

    public function create_maintenance(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
        ];
        return view('inspection.maintenance.add',$data);
    }
    public function store_maintenance(Request $request)
    {
        $slope = Slopes::where('slug',$request->slug)->first();
        $rating = json_decode(Slopes::where('slug', $request->slug)->first()['rating']);
        
        $img = TemporaryFile::all();
        $dir = TemporaryFile::select(['img', 'file','type'])->get();

        foreach ($img as $i) {
            Storage::move('temp/' . $i->file, $request->slug.'/maintenance-'.str_replace('/','',$request->date_of_maintenance).'/'. $i->file);
            TemporaryFile::find($i->id)->delete();
        }

        $maintenance = new Maintenance();
        $maintenance->slope_name = $slope->slope_name;
        $maintenance->slug = $slope->slug;
        $maintenance->slope_type = $slope->slope_type;
        $maintenance->date_of_maintenance = $request->date_of_maintenance;
        $maintenance->weather_condition = $request->weather_condition;
        $maintenance->resume = $request->resume;
        $maintenance->img = json_encode($dir);
        $maintenance->save();

        $cons = $rating->consequence_to_life;
        if ($cons == 'category-1') {
            $maintenance_date = 1;
        } else if($cons == 'category-2'){
            $maintenance_date = 1;
        }else if($cons == 'category-3'){
            $maintenance_date = 2;
        }
        $slope = Slopes::where('slug', $request->slug)->firstOrFail();
        $slope->maintenance_inspection = Carbon::now()->addYear($maintenance_date);
        $slope->save();

        return redirect('/inspection/'.$request->slug);
    }

    public function appr_management(string $id, Request $request){

        $inspection = Inspection::where('id', $id)->first();
        $slug = $inspection->slug;
        $inspection->appr_management = $request->appr_management;
        $inspection->save();

        if ($inspection->appr_engineer == 'verified'){
            if ($inspection->img !== [] || $inspection->img !== null) {
                $data = json_decode($inspection->img, true);
                foreach ($data as $i) {
                    Storage::move($slug.'/inspection/'.$i['file'], $slug.'/'.$i['file']);
                }
            }

            $slope2 = Slopes::where('slug', $inspection->slug)->firstOrFail();
            $slope = Slopes::where('slug', $inspection->slug)->firstOrFail();
            $slope->geometry = $inspection->geometry;
            $slope->characteristic = $inspection->characteristic;
            $slope->rating = $inspection->rating;
            $slope->ranking = $inspection->ranking;
            $slope->img = $inspection->img;
            $slope->engineer_inspection = $inspection->engineer_inspection;
            $slope->maintenance_inspection = $inspection->maintenance_inspection;
            $slope->save();


            if ($slope2->img !== [] || $slope2->img !== null) {
                $data = json_decode($slope2->img, true);
                foreach ($data as $i) {
                    Storage::move($slug.'/'.$i['file'], $slug.'/inspection/'.$i['file'] );
                }
            }

            $inspection->slope_name = $slope2->slope_name;
            $inspection->slug = $slope2->slug;
            $inspection->slope_type = $slope2->slope_type;
            $inspection->geometry = $slope2->geometry;
            $inspection->characteristic = $slope2->characteristic;
            $inspection->rating =$slope2->rating;
            $inspection->ranking = $slope2->ranking;
            $inspection->img = $slope2->img;
            $inspection->engineer_inspection = $slope2->inspection_date;
            $inspection->maintenance_inspection = $slope2->maintenance_date;
            $inspection->save();



        }
        return redirect('/engineer-inspection/'.$slug);
    }
    public function appr_engineer(string $id, Request $request){

        $inspection = Inspection::where('id', $id)->first();
        $slug = $inspection->slug;
        $inspection->appr_engineer = $request->appr_engineer;
        $inspection->save();

        if ($inspection->appr_management == 'verified'){
            if ($inspection->img !== [] || $inspection->img !== null) {
                $data = json_decode($inspection->img, true);
                foreach ($data as $i) {
                    Storage::move($slug.'/inspection/'.$i['file'], $slug.'/'.$i['file']);
                }
            }

            $slope2 = Slopes::where('slug', $inspection->slug)->firstOrFail();
            $slope = Slopes::where('slug', $inspection->slug)->firstOrFail();
            $slope->geometry = $inspection->geometry;
            $slope->characteristic = $inspection->characteristic;
            $slope->rating = $inspection->rating;
            $slope->ranking = $inspection->ranking;
            $slope->img = $inspection->img;
            $slope->engineer_inspection = $inspection->engineer_inspection;
            $slope->maintenance_inspection = $inspection->maintenance_inspection;
            $slope->save();


            if ($slope2->img !== [] || $slope2->img !== null) {
                $data = json_decode($slope2->img, true);
                foreach ($data as $i) {
                    Storage::move($slug.'/'.$i['file'], $slug.'/inspection/'.$i['file'] );
                }
            }

            $inspection->slope_name = $slope2->slope_name;
            $inspection->slug = $slope2->slug;
            $inspection->slope_type = $slope2->slope_type;
            $inspection->geometry = $slope2->geometry;
            $inspection->characteristic = $slope2->characteristic;
            $inspection->rating =$slope2->rating;
            $inspection->ranking = $slope2->ranking;
            $inspection->img = $slope2->img;
            $inspection->engineer_inspection = $slope2->inspection_date;
            $inspection->maintenance_inspection = $slope2->maintenance_date;
            $inspection->save();



        }
        return redirect('/engineer-inspection/'.$slug);
    }

    public function destroy(string $id){

        $item = Inspection::where('id',$id)->first();
        $slug = $item->slug;

        if ($item->img !== [] || $item->img !== null) {
            $data = json_decode($item->img, true);
            foreach ($data as $i) {
                Storage::deleteDirectory($item->slug.'/inspection/'.$i['file']);
            }
        }
        $item->delete();
        return redirect('/engineer-inspection/'.$slug)->with('success', 'Item deleted successfully.');
    }

}