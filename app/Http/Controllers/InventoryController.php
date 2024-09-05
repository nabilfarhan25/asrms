<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inspection;
use App\Models\Maintenance;
use App\Models\Mitigation;
use App\Models\Preservation;
use App\Models\Slopes;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;


class InventoryController extends Controller
{
    public function index()
    {
        $data = [
            'slopes' => Slopes::all(),
            'sideA' => count(Slopes::where('side_of_road', 'A')->get()),
            'sideB' => count(Slopes::where('side_of_road', 'B')->get()),

        ];
        return view('inventory.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'slope_name' => 'required|string|max:255|unique:slopes,slope_name',
            'location' => 'string|max:255',
            'sta1' => 'string|max:255',
            'sta2' => 'string|max:255',
            'latitude' => 'nullable|string|max:255',
            'longtitude' => 'nullable|string|max:255',
            'gps1' => 'nullable|string|max:255',
            'gps2' => 'nullable|string|max:255',
            'side_of_road' => 'required|string|max:255',
            'slope_type' => 'required|string|max:255',
        ]);

        $slug = Str::slug($request->slope_name);
        $slopes = new Slopes();
        $slopes->slope_name = $request->slope_name;
        $slopes->slug = $slug;
        $slopes->location = $request->location;
        $slopes->sta1 = $request->sta1;
        $slopes->sta2 = $request->sta2;
        $slopes->latitude = $request->latitude;
        $slopes->longtitude = $request->longtitude;
        $slopes->gps1 = $request->gps1;
        $slopes->gps2 = $request->gps2;
        $slopes->side_of_road = $request->side_of_road;
        $slopes->slope_type = $request->slope_type;

        $slopes->save();
        //dd($request->all());
        return redirect('/create/geometry/' . $slug);
    }

    public function detail(string $slug)
    {
        $slope = Slopes::where('slug', $slug)->first();
        if ($slope->geometry == null || $slope->characteristic == null || $slope->rating == null) {
            return redirect('/create/geometry/' . $slope->slug);
        }
        $data = [
            'slope' => $slope,
            'geometry' => json_decode(Slopes::where('slug', $slug)->first()['geometry']),
            'characteristic' => json_decode(Slopes::where('slug', $slug)->first()['characteristic']),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
        ];
        return view('inventory.detail', $data);
    }

    public function destroy(string $slug){
        $item = Slopes::where('slug',$slug)->first();
        $inspection = Inspection::where('slug',$slug)->get();
        $maintenance = Maintenance::where('slug',$slug)->get();
        $preservation = Preservation::where('slug',$slug)->get();
        $mitigation = Mitigation::where('slug',$slug)->get();

        Storage::deleteDirectory($slug);
        if ($inspection->isNotEmpty()) {
            $inspection->each->delete();
        }
        if ($maintenance->isNotEmpty()) {
            $maintenance->each->delete();
        }
        if ($mitigation->isNotEmpty()) {
            $mitigation->each->delete();
        }
        if ($preservation->isNotEmpty()) {
            $preservation->each->delete();
        }
        $item->delete();

        return redirect('/inventory')->with('success', 'Item deleted successfully.');
    }

    public function create_geometry(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
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
        
        return view('inventory.geometry', $data);
    }

    public function store_geometry(Request $request)
    {
        $geo = $request->all();
        unset($geo['_token']);

        //dd($geo);
        $request->session()->put('geometry', $geo);
        return redirect('/create/characteristic/' . $request->slug);
    }

    public function create_characteristic(Request $request)
    {
        $geo = $request->session()->get('geometry');
        $data = [
            'slope' => Slopes::where('slug', $geo['slug'])->first(),
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

        return view('inventory.characteristic', $data);
    }

    public function store_characteristic(Request $request)
    {
        $char = $request->all();
        unset($char['_token']);

        //dd($char);
        $request->session()->put('characteristic', $char);
        return redirect('/create/rating/' . $request->slug);
    }

    public function create_rating(Request $request)
    {
        $geo = $request->session()->get('geometry');
        $char = $request->session()->get('characteristic');

        $data = [
            'slope' => Slopes::where('slug', $geo['slug'])->first(),
            'geometry' => $geo,
            'characteristic' => $char,
        ];

        return view('inventory.rating', $data);
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
 
        // File Handling
        $img = TemporaryFile::all();
        $dir = TemporaryFile::select(['img', 'file','type'])->get();

        foreach ($img as $i) {
            Storage::move('temp/' . $i->file, $request->slug.'/'. $i->file);
            TemporaryFile::find($i->id)->delete();
        }

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
        ];
        } else {
            $TS = $IS * $CS;

            // Ranking Score
            $RS = 0;
            if ($slope->slope_type == 'cut-type') {
                $RS = $TS * 0.063;
            } else if($slope->slope_type == 'rock-type'){
                $RS = $TS * 0.022;
            } else if($slope->slope_type == 'fill-type'){
                $RS = $TS * 0.006;
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

        $slope = Slopes::where('slug', $request->slug)->firstOrFail();
        $slope->geometry = $geometry;
        $slope->characteristic = $characteristic;
        $slope->rating = $rating;
        $slope->ranking = json_encode($ranking);
        $slope->img = json_encode($dir);
        $slope->engineer_inspection = Carbon::now()->addYear($inspection_date);
        $slope->maintenance_inspection = Carbon::now()->addYear($maintenance_date);

        $slope->save();

        $request->session()->forget(['geometry', 'characteristic', 'rating']);
        return redirect('/management');
    }

    public function edit_geometry(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'geometry' => json_decode(Slopes::where('slug', $slug)->first()['geometry']),
        ];
        return view('inventory.geometry', $data);
    }

    public function change_geometry(Request $request)
    {
        $geo = $request->all();
        unset($geo['_token']);

        //dd($geo);
        $request->session()->put('geometry', $geo);
        return redirect('/edit/characteristic/' . $request->slug);
    }
    
    public function edit_characteristic(Request $request)
    {
        $geo = $request->session()->get('geometry');
        $data = [
            'slope' => Slopes::where('slug', $geo['slug'])->first(),
            'characteristic' => json_decode(Slopes::where('slug', $geo['slug'])->first()['characteristic']),
        ];

        return view('inventory.characteristic', $data);
    }

    public function change_characteristic(Request $request)
    {
        $char = $request->all();
        unset($char['_token']);

        //dd($char);
        $request->session()->put('characteristic', $char);
        return redirect('/edit/rating/' . $request->slug);
    }

    public function edit_rating(Request $request)
    {
        $geo = $request->session()->get('geometry');
        $char = $request->session()->get('characteristic');
        $rat = json_decode(Slopes::where('slug', $geo['slug'])->first()['rating']);

        $data = [
            'slope' => Slopes::where('slug', $geo['slug'])->first(),
            'geometry' => $geo,
            'characteristic' => $char,
            'rating' => $rat,

        ];
        return view('inventory.rating', $data);
    }

    public function change_rating(Request $request)
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
            'TS' => $TS,
        ];
        } else {
            $TS = $IS * $CS;
            $ranking = [
            'IS' =>$IS,
            'CS' =>$CS,
            'TS' =>$TS,
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

        $slope = Slopes::where('slug', $request->slug)->firstOrFail();
        $slope->geometry = $geometry;
        $slope->characteristic = $characteristic;
        $slope->rating = $rating;
        $slope->ranking = json_encode($ranking);
        $slope->engineer_inspection = Carbon::now()->addYear($inspection_date);
        $slope->maintenance_inspection = Carbon::now()->addYear($maintenance_date);

        $slope->save();

        $request->session()->forget(['geometry', 'characteristic', 'rating']);
        return redirect('/management');
    }


    public function tempUpload(Request $request)
    {
        if ($request->hasFile('plan')) {
            $img = $request->file('plan');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $plan = uniqid('plan-');
            $img->storeAs('temp/' . $plan, $img_name);
            TemporaryFile::create(
                [
                    'file' => $plan,
                    'img' => $img_name,
                    'type' => 'plan',
                ]
            );
            return $plan;
        }
        if ($request->hasFile('cross')) {
            $img = $request->file('cross');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $cross = uniqid('cross-');
            $img->storeAs('temp/' . $cross, $img_name);
            TemporaryFile::create(
                [
                    'file' => $cross,
                    'img' => $img_name,
                    'type' => 'cross',

                ]
            );
            return $cross;
        }

        if ($request->hasFile('img_slope_protection')) {
            $img = $request->file('img_slope_protection');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_slope_protection = uniqid('img_slope_protection-');
            $img->storeAs('temp/' . $img_slope_protection, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_slope_protection,
                    'img' => $img_name,
                    'type' => 'img_slope_protection',

                ]
            );
            return $img_slope_protection;
        }

        if ($request->hasFile('img_surface_drainage_provision')) {
            $img = $request->file('img_surface_drainage_provision');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_surface_drainage_provision = uniqid('img_surface_drainage_provision-');
            $img->storeAs('temp/' . $img_surface_drainage_provision, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_surface_drainage_provision,
                    'img' => $img_name,
                    'type' => 'img_surface_drainage_provision',

                ]
            );
            return $img_surface_drainage_provision;
        }
        if ($request->hasFile('img_hydrogeological_settings')) {
            $img = $request->file('img_hydrogeological_settings');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_hydrogeological_settings = uniqid('img_hydrogeological_settings-');
            $img->storeAs('temp/' . $img_hydrogeological_settings, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_hydrogeological_settings,
                    'img' => $img_name,
                    'type' => 'img_hydrogeological_settings',

                ]
            );
            return $img_hydrogeological_settings;
        }
        if ($request->hasFile('img_geological_features')) {
            $img = $request->file('img_geological_features');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_geological_features = uniqid('img_geological_features-');
            $img->storeAs('temp/' . $img_geological_features, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_geological_features,
                    'img' => $img_name,
                    'type' => 'img_geological_features',
                ]
            );
            return $img_geological_features;
        }
        if ($request->hasFile('img_signs_of_distress')) {
            $img = $request->file('img_signs_of_distress');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_signs_of_distress = uniqid('img_signs_of_distress-');
            $img->storeAs('temp/' . $img_signs_of_distress, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_signs_of_distress,
                    'img' => $img_name,
                    'type' => 'img_signs_of_distress',

                ]
            );
            return $img_signs_of_distress;
        }
        if ($request->hasFile('img_instability_after')) {
            $img = $request->file('img_instability_after');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_instability_after = uniqid('img_instability_after-');
            $img->storeAs('temp/' . $img_instability_after, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_instability_after,
                    'img' => $img_name,
                    'type' => 'img_instability_after',

                ]
            );
            return $img_instability_after;
        }

        if ($request->hasFile('img_maintenance')) {
            $img = $request->file('img_maintenance');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_maintenance = uniqid('img_maintenance-');
            $img->storeAs('temp/' . $img_maintenance, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_maintenance,
                    'img' => $img_name,
                    'type' => 'img_maintenance',

                ]
            );
            return $img_maintenance;
        }

        if ($request->hasFile('file_maintenance')) {
            $img = $request->file('file_maintenance');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $file_maintenance = uniqid('file_maintenance-');
            $img->storeAs('temp/' . $file_maintenance, $img_name);
            TemporaryFile::create(
                [
                    'file' => $file_maintenance,
                    'img' => $img_name,
                    'type' => 'file_maintenance',

                ]
            );
            return $file_maintenance;
        }

        if ($request->hasFile('file_preservation')) {
            $img = $request->file('file_preservation');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $file_preservation = uniqid('file_preservation-');
            $img->storeAs('temp/' . $file_preservation, $img_name);
            TemporaryFile::create(
                [
                    'file' => $file_preservation,
                    'img' => $img_name,
                    'type' => 'file_preservation',

                ]
            );
            return $file_preservation;
        }

        return '';
    }
    public function tempDelete(Request $request)
    {
        $file = TemporaryFile::where('file',$request->getContent())->first();
        if (isset($file)) {
            Storage::deleteDirectory('temp/' . $file->file);
            $file->delete();
            return response('');
        }
    }

}