<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Users;

class KullanicilarsController extends Controller
{
    public function index()
    {
        $data['user'] = Users::all()->sortBy('id');
        return view('backend.kullanicilar.index', compact('data'));
        
    }
    public function destroy($id)
    {
        $Users = Users::find($id);
        if ($Users->delete()) {
            return back()->with('success', 'İşlem Başarılı');
        }

        return back()->with('error', 'İşlem Başarısız');
        
    }
    public function duzenle($id)
    {
        $kullanici =Users::where('id',$id)->first();
        return view('backend.kullanicilar.duzenle')->with('kullanici',$kullanici);
    }
}
