<?php

namespace App\Http\Controllers\Backend;

use App\Hastanes;
use App\Rkategoris;
use DataTables;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RkategorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Rkategoris::latest()->get();
            return DataTables::of($data)
                ->addColumn('action', function($data){
                    $hastane = Hastanes::where('rehkat', $data->id )->count();
                    $button = '<button type="button" name="edit" data-rehkat_id="'.$data->id.'" data-rehkat_adi="'.$data->rehkat_adi.'" class="edit btn btn-primary btn-sm" data-toggle="modal" data-target="#katduzenleme">Edit</button>';
                    if ($hastane <= 0){
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" data-rehkat_id="'.$data->id.'" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Delete</button>';
                    }else{
                        //$button .=   " ".$hastane ."Tane Personel Ekli Gözüküyor";
                    }
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
      return view("backend.diger.rehkategori");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'rehkat_adi' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return back()->with('error', 'Lütfen Zorunlu Alanları Doldurunuz. Kayıt Yapılamadı');
        }

        $form_data = array(
            'rehkat_adi' => $request->rehkat_adi
        );

        Rkategoris::create($form_data);

        return back()->with('success', 'İşlem Başarılı');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rkategoris  $rkategoris
     * @return \Illuminate\Http\Response
     */
    public function show(Rkategoris $rkategoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rkategoris  $rkategoris
     * @return \Illuminate\Http\Response
     */
    public function edit(Rkategoris $rkategoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rkategoris  $rkategoris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rkategoris $rkategoris)
    {
        $rules = array(
            'rehkat_adi' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return back()->with('error', 'Lütfen Zorunlu Alanları Doldurunuz. Kayıt Yapılamadı');
        }

        $pozisyon = Rkategoris::Where('id', $request->rehkat_id)->update(
            [
                "rehkat_adi" => $request->rehkat_adi,
            ]
        );
        if ($pozisyon) {
            return back()->with('success', 'İşlem Başarılı');
        }
        return back()->with('error', 'İşlem Başarısız');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rkategoris  $rkategoris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {


        $pozisyon = Rkategoris::findOrFail($request->rehkat_id);
        $pozisyon->delete();

        if ($pozisyon) {
            return back()->with('success', 'Silme İşlem Başarılı');
        }
        return back()->with('error', 'Silme İşlem Başarısız');

    }
}
