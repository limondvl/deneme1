<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\Muracaat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MuracaatController extends Controller
{
    public function index()
    {
        $count = DB::table('muracaats')->count();
        $muracaat = Muracaat::all();
        return view('admin.pages.tables.muracaat_table',[
            'count'=>$count,
            'muracaat'=>$muracaat,
        ]);
    }

    public function Muracaat_Insert(Request $request)
    {
        $muracaat = new Muracaat();
        $muracaat->name = $request->input('name');
        $muracaat->email = $request->input('email');
        $muracaat->contac = $request->input('contac');
        $muracaat->subject = $request->input('subject');
        $muracaat->messages = $request->input('messages');
        $validateData = $request->validate([
           'name'=>'required|min:3|max:50|regex:/^[\D]+$/i',
           'email'=>'string|required',
           'contac'=>'required|numeric|min:8',
           'subject'=>'required|min:5|max:50',
           'messages'=>'required|min:10|max:255'
        ],[
            'name.required'=>'İsim Ve Soy İsim Alanı Zorunludur',
            'name.min'=>'Ad Ve Soyad İsim Alanı En Az 3 Karakter Olmalıdır',
            'name.max'=>'Ad Ve Soyad İsim Alanı En Fazla 50 Karakter Olmalıdır',
            'email.required'=>'Email Alanı Zorunludur',
            'contac.required'=>'Telefon Numarası Girilmesi Zorunludur',
            'contac.numeric'=>'Telefon Numarası Sayısal Olması Gereklidir',
            'contac.min'=>'Telefon Numarası En Az 8 Karakter Olmalıdır',
            'subject.required'=>'Konu Alanı Zorunludur',
            'subject.min'=>'Konu Alanı En Az 5 Karakter Olmalıdır',
            'subject.max'=>'Konu Alanı En Fazla 50 Karakter Olmalıdır',
            'messages.required'=>'Mesaj Alanı Zorunludur',
            'messages.min'=>'Mesaj Alanı En Az 10 Karakter Olmalıdır',
            'messages.max'=>'Mesaj Alanı En Fazla 255 Karakter Olmalıdır'
        ]);
        $muracaat->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $muracaat = Muracaat::find($id);
        $muracaat->delete();
        $notifaciton = array(
            'message'=>'Silme İşlemi Başarılı'  ,
            'alert-type'=>'success');
        return redirect()->back()->with($notifaciton);
    }
}
