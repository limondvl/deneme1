<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages\About;
use App\Models\Pages\Footer;
use App\Models\Pages\Neden_Biz;
use App\Models\Pages\Services;
use App\Models\Pages\Slider;
use App\Models\Pages\Top_Header;

class FrontEndController extends Controller
{
    public function index()
    {

        $header = Top_Header::select('*')->take(1)->get();
        $slider = Slider::select('*')->take(1)->get();
        $about  = About::all();
        $service = Services::select('*')->take(1)->get();
        $neden = Neden_Biz::select('*')->take(1)->get();
        $footer = Footer::select('*')->take(1)->get();
        return view('frontend.main_master',[
            'header'=>$header,
            'slider'=>$slider,
            'about'=>$about,
            'service'=>$service,
            'neden'=>$neden,
            'footer'=>$footer

        ]);

    }

    public function kazan()
    {
        $header = Top_Header::select('*')->take(1)->get();
        $slider = Slider::select('*')->take(1)->get();
        $about  = About::all();
        $service = Services::select('*')->take(1)->get();
        $neden = Neden_Biz::select('*')->take(1)->get();
        $footer = Footer::select('*')->take(1)->get();
        return view('includes.kazan_sistemleri',[
            'header'=>$header,
            'slider'=>$slider,
            'about'=>$about,
            'service'=>$service,
            'neden'=>$neden,
            'footer'=>$footer
        ]);
    }

    public function kombi()
    {
        $header = Top_Header::select('*')->take(1)->get();
        $slider = Slider::select('*')->take(1)->get();
        $about  = About::all();
        $service = Services::select('*')->take(1)->get();
        $neden = Neden_Biz::select('*')->take(1)->get();
        $footer = Footer::select('*')->take(1)->get();
        return view('includes.kombi-sistemleri',[
            'header'=>$header,
            'slider'=>$slider,
            'about'=>$about,
            'service'=>$service,
            'neden'=>$neden,
            'footer'=>$footer
        ]);
    }
    public function klima()
    {
        $header = Top_Header::select('*')->take(1)->get();
        $slider = Slider::select('*')->take(1)->get();
        $about  = About::all();
        $service = Services::select('*')->take(1)->get();
        $neden = Neden_Biz::select('*')->take(1)->get();
        $footer = Footer::select('*')->take(1)->get();
        return view('includes.kilma_sistemleri',[
            'header'=>$header,
            'slider'=>$slider,
            'about'=>$about,
            'service'=>$service,
            'neden'=>$neden,
            'footer'=>$footer
        ]);
    }
    public function havanlandirma()
    {
        $header = Top_Header::select('*')->take(1)->get();
        $slider = Slider::select('*')->take(1)->get();
        $about  = About::all();
        $service = Services::select('*')->take(1)->get();
        $neden = Neden_Biz::select('*')->take(1)->get();
        $footer = Footer::select('*')->take(1)->get();
        return view('includes.havalindirma_sistemleri',[
            'header'=>$header,
            'slider'=>$slider,
            'about'=>$about,
            'service'=>$service,
            'neden'=>$neden,
            'footer'=>$footer
        ]);
    }


}
