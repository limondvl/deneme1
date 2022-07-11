<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Neden_Biz;
use Illuminate\Http\Request;

class Neden_BizController extends Controller
{
    public function index()
    {
        $neden = Neden_Biz::all();
        return view('admin.pages.tables.neden_biz_table',compact('neden'));
    }

    public function edit($id)
    {
        $neden = Neden_Biz::find($id);
        return view('admin.pages.neden_biz_edit',compact('neden'));
    }

    public function update(Request $request,$id)
    {
        $neden = Neden_Biz::find($id);
        $neden->title = $request->input('title');
        $neden->description = $request->input('description');
        $neden->name_1 = $request->input('name_1');
        $neden->name_desc_1 = $request->input('name_desc_1');
        $neden->name_2 = $request->input('name_2');
        $neden->name_desc_2 = $request->input('name_desc_2');
        $neden->name_3 = $request->input('name_3');
        $neden->name_desc_3 = $request->input('name_desc_3');
        $neden->name_4 = $request->input('name_4');
        $neden->name_desc_4 = $request->input('name_desc_4');
        $neden->update();
        $notifaciton = array(
            'message'=>'Güncelleme Başarılı'  ,
            'alert-type'=>'success');
        return redirect()->back()->with($notifaciton);
    }
}
