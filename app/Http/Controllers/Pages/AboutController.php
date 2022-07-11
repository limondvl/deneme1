<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index ()
    {
        $about = About::all();
        return view('admin.pages.tables.about_table',compact('about'));
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.pages.about_edit',compact('about'));
    }

    public function update(Request $request,$id)
    {
        $about = About::find($id);
        $about->title = $request->input('title');
        $about->content = $request->input('content');
        $about->option_1 = $request->input('option_1');
        $about->option_2 = $request->input('option_2');
        $about->option_3 = $request->input('option_3');
        $about->option_4 = $request->input('option_4');
        $about->update();
        $notifaciton = array(
            'message'=>'Güncelleme Başarılı'  ,
            'alert-type'=>'success');
        return redirect()->back()->with($notifaciton);
    }
}
