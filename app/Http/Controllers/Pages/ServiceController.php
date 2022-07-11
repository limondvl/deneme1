<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Services::all();
        return view('admin.pages.tables.service_table',compact('service'));
    }

    public function edit($id)
    {
        $service = Services::find($id);
        return view('admin.pages.service_edit',compact('service'));
    }

    public function update(Request $request,$id)
    {
        $service = Services::find($id);
        $service->title = $request->input('title');
        $service->sub_title = $request->input('sub_title');
        $service->button = $request->input('button');
        $service->kazan_sistemleri_1 = $request->input('kazan_sistemleri_1');
        $service->kazan_sistemleri_2 = $request->input('kazan_sistemleri_2');
        $service->kombi_sistemleri_1 = $request->input('kombi_sistemleri_1');
        $service->kombi_sistemleri_2 = $request->input('kombi_sistemleri_2');
        $service->havalandırma_sistemleri_1 = $request->input('havalandırma_sistemleri_1');
        $service->havalandırma_sistemleri_2 = $request->input('havalandırma_sistemleri_2');
        $service->otomasyon_sistemleri_1 = $request->input('otomasyon_sistemleri_1');
        $service->otomasyon_sistemleri_2 = $request->input('otomasyon_sistemleri_2');
        $service->yangin_korumasi_1 = $request->input('yangin_korumasi_1');
        $service->yangin_korumasi_2 = $request->input('yangin_korumasi_2');
        $service->yalitim_1 = $request->input('yalitim_1');
        $service->yalitim_2 = $request->input('yalitim_2');
        $service->ozon_sistemleri_1 = $request->input('ozon_sistemleri_1');
        $service->ozon_sistemleri_2 = $request->input('ozon_sistemleri_2');
        $service->update();
        $notifaciton = array(
            'message'=>'Güncelleme Başarılı'  ,
            'alert-type'=>'success');
        return redirect()->back()->with($notifaciton);
    }
}
