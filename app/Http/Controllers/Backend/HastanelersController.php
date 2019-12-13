<?php

namespace App\Http\Controllers\Backend;

use App\Hastanelers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HastanelersController extends Controller
{

    public function index()
    {
        $data['hastanelers'] = Hastanelers::all()->sortBy('hastane_sira');
        // dd( $data['adminSettings']);
        return view('backend.hastaneler.index', compact('data'));
    }

    public function ekle()
    {
        return view('backend.hastaneler.ekle');
    }

    public function destroy($id)
    {
        $Hastanelers = Hastanelers::find($id);
        if ($Hastanelers->delete()) {
            return back()->with('success', 'İşlem Başarılı');
        }

        return back()->with('error', 'İşlem Başarısız');

    }

    public function duzenle($id)
    {
        $hastanelers = Hastanelers::where('id', $id)->first();

        if ($hastanelers){
            return view('backend.hastaneler.duzenle')->with('hastanelers', $hastanelers);
        }else{

            //return view('backend.hastaneler.index');
            return redirect('admin/hastaneler')->with('error', 'Yanlış Alandasın');
        }

    }

    public function Update(Request $request, $id)
    {
        $hastanelers = Hastanelers::Where('id', $id)->update(
            [
                'hastane_adi' => $request->hastane_adi,
                'hastane_il' => $request->hastane_il,
                'hastane_ilce' => $request->hastane_ilce,
                'hastane_adres' => $request->hastane_adres,
                'hastane_tel' => $request->hastane_tel
            ]

        );
        return back()->with("success","Düzenleme İşlemi Başarılı Şekilde Gerçekleştirilmiştir.");
    }
}
