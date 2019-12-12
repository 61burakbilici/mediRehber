<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;


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
        $kullanici = Users::where('id', $id)->first();
        return view('backend.kullanicilar.duzenle')->with('kullanici', $kullanici);
    }

    public function Update(Request $request, $id)
    {
        if ($request->hasFile('users_foto'))
        {
            $request->validate([
                'users_foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
            ]);

            $file_name=uniqid().'.'.$request->users_foto->getClientOriginalExtension();
            $request->users_foto->move(public_path('images/users'),$file_name);
            $request->users_foto=$file_name;
        }


        $kullanici = Users::Where('id', $id)->update(
            [
                'users_foto' => $file_name,
                'users_name' => $request->users_name,
                'users_username' => $request->users_username,
                'users_tel' => $request->users_tel,
                'hastane_id' => $request->hastane_id,
                'users_email' => $request->users_email,
                'users_password' => bcrypt($request->users_password)
            ]

        );

        if ($kullanici)
        {
            $path='images/users/'.$request->old_file;
            if (file_exists($path))
            {
                @unlink(public_path($path));
            }

            return back()->with("success","Düzenleme İşlemi Başarılı Şekilde Gerçekleştirilmiştir.");
        }
        return back()->with("error","Düzenleme İşlemi Başarısız");

    }
}
