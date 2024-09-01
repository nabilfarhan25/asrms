<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slopes;
use App\Models\Mitigation;


class PDFController extends Controller
{
    public function inventory(string $slug)
    {
        $slope = Slopes::where('slug', $slug)->first();
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'geometry' => json_decode(Slopes::where('slug', $slug)->first()['geometry']),
            'characteristic' => json_decode(Slopes::where('slug', $slug)->first()['characteristic']),
        ];
        $mpdf = new \Mpdf\Mpdf();
        if ($slope->slope_type == 'cut-type') {
            $mpdf->WriteHTML(view('pdf.cut_inventory',$data));
        }else if($slope->slope_type == 'rock-type'){
            $mpdf->WriteHTML(view('pdf.rock_inventory',$data));
        } else {
        }
        $mpdf->Output();
    }

    public function rating(string $slug)
    {
        $slope = Slopes::where('slug', $slug)->first();
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'geometry' => json_decode(Slopes::where('slug', $slug)->first()['geometry']),
            'characteristic' => json_decode(Slopes::where('slug', $slug)->first()['characteristic']),
            'rating' => json_decode(Slopes::where('slug', $slug)->first()['rating']),
            'ranking' => json_decode(Slopes::where('slug', $slug)->first()['ranking']),

        ];
        $mpdf = new \Mpdf\Mpdf();
        if ($slope->slope_type == 'cut-type') {
            $mpdf->WriteHTML(view('pdf.cut_rating',$data));
        }else if($slope->slope_type == 'rock-type'){
            $mpdf->WriteHTML(view('pdf.rock_rating',$data));

        }
        $mpdf->Output();
    }

    public function mitigation(string $id)
    {
        $data = [
            'mitigation' => Mitigation::where('id', $id)->first(),
            'data' => json_decode(Mitigation::where('id', $id)->first()['mitigation_estimate']),

        ];
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('pdf.mitigation',$data));
        
        $mpdf->Output();
    }

}