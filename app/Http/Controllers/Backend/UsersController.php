<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Users;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = Users::all()->sortBy('id');
        return view('backend.kullanicilar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Auth::user()->role;
        if ($role == 1) {
            return view('backend.kullanicilar.ekle');
        } else {
            return redirect('admin/')->with('error', 'Yanlış Alandasın');
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $rules = array(
            'name' => 'required',
            'email' => 'required|unique:Users|email',
            'users_password' => 'required',
            'users_tel' => 'numeric|nullable'
        );

       $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return redirect()->back()->withErrors(['errors' => $error->errors()->all()]);
        }


        if ($request->users_foto == null || empty($request->users_foto) || $request->users_foto == "" || $request->users_foto == " ") {
            $file_name = null;
        } else {
            if ($request->hasFile('users_foto')) {
                $request->validate([
                    'users_foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
                ]);

                $file_name = uniqid() . '.' . $request->users_foto->getClientOriginalExtension();
                $request->users_foto->move(public_path('images/users'), $file_name);
                $request->users_foto = $file_name;
            }

        }
        $kullanici = Users::insert(
            [
                'users_foto' => $file_name,
                'name' => $request->name,
                'email' => $request->email,
                'users_tel' => $request->users_tel,
                'hastane_id' => $request->hastane_id,
                'role' => $request->role,
                'password' => bcrypt($request->users_password)
            ]

        );


        if ($kullanici) {

            return back()->with("success", "Kayıt İşlemi Başarılı Şekilde Gerçekleştirilmiştir.");
        } else {
            return back()->with("error", "Kayıt İşlemi Başarısız");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Auth::user()->role;
        $udi = Auth::user()->id;
        $yetkiler = \App\User::find($id)->roles;
        if ($role == 1 || $udi== $id) {
            $kullanici = Users::where('id', $id)->first();
            return view('backend.kullanicilar.duzenle')->with(['kullanici'=>$kullanici,'yetkiler'=>$yetkiler]);
        } else {
            return redirect('admin')->with('error', 'Yanlış Alandasın');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = DB::table('users')->where('id', $request->kullanici_id)->first();

        if ($request->users_foto == null || empty($request->users_foto) || $request->users_foto == "" || $request->users_foto == " ") {
            if (empty($user->users_foto)) {
                $file_name = null;
            } else {
                $file_name = $user->users_foto;
            }


        } else {
            if ($request->hasFile('users_foto')) {
                $request->validate([
                    'users_foto' => 'required|image|mimes:jpg,jpeg,png|max:2048'
                ]);

                $file_name = uniqid() . '.' . $request->users_foto->getClientOriginalExtension();
                $request->users_foto->move(public_path('images/users'), $file_name);
                $request->users_foto = $file_name;
            }

        }


        if (empty($request->users_password)) {

            $kullanici = Users::Where('id', $request->kullanici_id)->update(
                [
                    'users_foto' => $file_name,
                    'name' => $request->name,
                    'email' => $request->email,
                    'users_tel' => $request->users_tel,
                    'hastane_id' => $request->hastane_id,
                    'role' => $request->role
                ]

            );
        } else {

            $kullanici = Users::Where('id', $request->kullanici_id)->update(
                [
                    'users_foto' => $file_name,
                    'name' => $request->name,
                    'email' => $request->email,
                    'users_tel' => $request->users_tel,
                    'hastane_id' => $request->hastane_id,
                    'role' => $request->role,
                    'password' => bcrypt($request->users_password)
                ]

            );
        }

        if (!empty($request->users_foto)) {

            if ($kullanici) {
                $path = 'images/users/' . $user->users_foto;
                if (file_exists($path)) {
                    @unlink(public_path($path));
                }

                //return back()->with("success", "Düzenleme İşlemi Başarılı Şekilde Gerçekleştirilmiştir.");

            }
        }
        if ($kullanici) {

            return back()->with("success", "Düzenleme İşlemi Başarılı Şekilde Gerçekleştirilmiştir.");
        } else {
            return back()->with("error", "Düzenleme İşlemi Başarısız");
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = Auth::user()->id;
        if ($user_id==$id){
            echo 0;
        }else{
        $has = Users::find(intval($id));
        if ($has->delete()) {
            echo 1;
        }
        echo 0;
        }
    }
}
