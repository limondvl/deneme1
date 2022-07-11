<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::all();
        return view('admin.pages.tables.footer_table',compact('footer'));
    }

    public function edit($id)
    {
        $footer = Footer::find($id);
        return view('admin.pages.footer_edit',compact('footer'));
    }

    public function update(Request $request,$id)
    {
        $footer = Footer::find($id);
        $footer->description = $request->input('description');
        $footer->title = $request->input('title');
        $footer->menu_1 = $request->input('menu_1');
        $footer->menu_2 = $request->input('menu_2');
        $footer->menu_3 = $request->input('menu_3');
        $footer->menu_4 = $request->input('menu_4');
        $footer->menu_5 = $request->input('menu_5');
        $footer->menu_6 = $request->input('menu_6');
        $footer->helpful_link = $request->input('helpful_link');
        $footer->name = $request->input('name');
        $footer->tel = $request->input('tel');
        $footer->email = $request->input('email');
        $footer->link_title = $request->input('link_title');
        $footer->link = $request->input('link');
        $footer->facebook = $request->input('facebook');
        $footer->twitter = $request->input('twitter');
        $footer->instagram = $request->input('instagram');
        $footer->linkledin = $request->input('linkledin');
        $footer->update();
        $notifaciton = array(
            'message'=>'Güncelleme Başarılı'  ,
            'alert-type'=>'success');
        return redirect()->back()->with($notifaciton);
    }
}
