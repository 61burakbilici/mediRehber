<?php

namespace App\Http\Controllers\Backend;

use App\Hastanes;
use App\Http\Controllers\Controller;
use App\Pozisyonlars;
use DataTables;
use Illuminate\Http\Request;
use Validator;

class PozisyonlarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Pozisyonlars::latest()->get();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $hastane = Hastanes::where('bolum', $data->id )->count();
                    $button = '<button class="edit btn btn-primary btn-sm" data-pozisyon="' . $data->pozisyon . '" data-pozisyonid=' . $data->id . ' data-toggle="modal" data-target="#edit">Düzenle</button>';
                    if ($hastane <= 0){
                    $button .= '&nbsp;&nbsp;&nbsp; <button class="delete btn btn-danger btn-sm" data-pozisyonid=' . $data->id . ' data-toggle="modal" data-target="#delete">Sil</button>';
                    }else{
                       // $button .=   $hastane;
                    }
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }


        return view("backend.diger.pozisyonlar");
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'pozisyon' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'pozisyon' => $request->pozisyon
        );

        Pozisyonlars::create($form_data);

        return response()->json(['success' => 'Kayıt İşlemi Başarılı Bir Şekilde Tamamlandı']);

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
        $pozisyon = Pozisyonlars::Where('id', $request->pozisyon_id)->update(
            [
                "pozisyon" => $request->pozisyon,
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {


        $pozisyon = Pozisyonlars::findOrFail($request->pozisyon_id);
        $pozisyon->delete();

        if ($pozisyon) {
            return back()->with('success', 'İşlem Başarılı');
        }
        return back()->with('error', 'İşlem Başarısız');




    }
}
