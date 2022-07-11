<?php

namespace App\Http\Controllers;

use App\Models\Pages\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.pages.Slider',compact('sliders'));
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.pages.sliders_edit',compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $slider->title = $request->input('title');
        $slider->sub_title = $request->input('sub_title');
        $slider->button = $request->input('button');
        $slider->update();
        $notifaciton = array(
            'message'=>'Güncelleme Başarılı'  ,
            'alert-type'=>'success');
        return redirect()->back()->with($notifaciton);

    }
}
