<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slopes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\TemporaryFile;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
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

        if ($request->hasFile('doc')) {
            $img = $request->file('doc');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $doc = uniqid('doc-');
            $img->storeAs('temp/' . $doc, $img_name);
            TemporaryFile::create(
                [
                    'file' => $doc,
                    'img' => $img_name,
                    'type' => 'doc',

                ]
            );
            return $img->getClientOriginalName();
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
    public function deleteImage($slug, $key){

        $slope = Slopes::where('slug', $slug)->firstOrFail();

        $images = json_decode($slope->img, true);

        if (isset($images[$key])) {
            Storage::deleteDirectory($slug .'/' . $images[$key]['file']);
            unset($images[$key]);
            $slope->img = json_encode($images);
            $slope->save();
        }

        return redirect()->back()->with('success', 'Image deleted successfully');
    }

}