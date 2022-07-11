<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Top_Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
//    public function Top_Header()
//    {
//        $data = Top_Header::all();
//        return view('admin.pages.top_header',compact('data'));
//    }//End

//    public function Top_Header_Insert(Request $request)
//    {
//        $header = new Top_Header();
//        $header->adres = $request->input('adres');
//        $header->tel_1 = $request->input('tel_1');
//        $header->tel_2 = $request->input('tel_2');
//        $header->facebook = $request->input('facebook');
//        $header->twitter = $request->input('twitter');
//        $header->linkledin = $request->input('linkledin');
//        $header->save();
//        $notifaciton = array(
//            'message'=>'Güncelleme Başarılı'  ,
//            'alert-type'=>'success'
//        );
//        return redirect('/admin/add/top_header')->with($notifaciton);
//    }//End
    public function Top_Header_Update(Request $request,$id)
    {
        $header =Top_Header::find($id);
        $header->adres = $request->input('adres');
        $header->tel_1 = $request->input('tel_1');
        $header->tel_2 = $request->input('tel_2');
        $header->facebook = $request->input('facebook');
        $header->twitter = $request->input('twitter');
        $header->linkledin = $request->input('linkledin');
        $header->update();
        $notifaciton = array(
            'message'=>'Güncelleme Başarılı'  ,
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notifaciton);
    }//End
    public function Top_Header_Table()
    {
        $header = Top_Header::all();
        return view('admin.pages.tables.top_header',compact('header'));
    }//End

    public function Top_Header_Edit($id)
    {
        $header = Top_Header::find($id);
        return view('admin.pages.top_header_edit',compact('header'));
    }
}

