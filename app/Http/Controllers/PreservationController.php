<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Slopes;
use App\Models\Preservation;
use App\Models\TemporaryFile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PreservationController extends Controller
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
        return view('preservation.index', $data);
    }

    public function detail(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug',$slug)->first(),
            'preservations' => Preservation::where('slug',$slug)->get(),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
            
        ];
        return view('preservation.detail', $data);
    }

    public function create(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug',$slug)->first(),          
        ];
        return view('preservation.add', $data);
    }
    
    public function preservation(string $slug, $id)
    {
        $slug = Preservation::where('id',$id)->first()->slug;
        $slope = Slopes::where('slug', $slug)->first();
        $data = [
            'slope' => $slope,
            'preservations' => Preservation::where('slug',$slug)->get(),
            'preservation' => Preservation::where('id',$id)->first(),
            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
            'estimate' => json_decode(Preservation::where('id', $id)->first()['preservation_estimate']),
        ];
        return view('preservation.preservation', $data);
    }
    
    public function store(Request $request){
        $slope = Slopes::where('slug',$request->slug)->first();
        //dd($request->all());
        $preservation = new Preservation();
        $preservation->slope_name = $slope->slope_name;
        $preservation->slug = $slope->slug;
        $preservation->slope_type = $slope->slope_type;

        $preservation->date_of_landslide = $request->date_of_landslide;
        $preservation->landslide_type = $request->landslide_type;
        $preservation->type_of_improvement_works = $request->type_of_improvement_works;


        $type = $request->all();
        unset($type['_token']);
        unset($type['slug']);
        unset($type['date_of_landslide']);
        unset($type['landslide_type']);
        unset($type['type_of_improvement_works']);
        unset($type['note']);

        $preservation->type = json_encode($type);

        $files = TemporaryFile::all();

        foreach ($files as $i) {
            Storage::move('temp/' . $i->file, $request->slug.'/preservation-'.str_replace('/','',Carbon::now()->toDateString()).'/'. $i->file);
            TemporaryFile::find($i->id)->delete();
        }
        $preservation->file = json_encode($files);

        $preservation->note = $request->note;

        $preservation->save();

        return redirect('/preservation/'.$request->slug);
    }

    public function destroy(string $id){
        $item = Preservation::where('id',$id)->first();
        $slug = $item->slug;

        // Delete File
        Storage::deleteDirectory($slug.'/preservation-'.explode(' ', $item->created_at)[0]);
        
        $item->delete();
        return redirect('/preservation/'.$slug)->with('success', 'Item deleted successfully.');

    }
}