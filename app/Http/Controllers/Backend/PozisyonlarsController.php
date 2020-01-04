<?php

namespace App\Http\Controllers\Backend;

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
                    $button = '<button class="edit btn btn-primary btn-sm" data-pozisyon="' . $data->pozisyon . '" data-pozisyonid=' . $data->id . ' data-toggle="modal" data-target="#edit">Düzenle</button>';
                    $button .= '&nbsp;&nbsp;&nbsp; <button class="delete btn btn-danger btn-sm" data-pozisyonid=' . $data->id . ' data-toggle="modal" data-target="#delete">Sil</button>';
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
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {


        $category = Pozisyonlars::findOrFail($request->pozisyon_id);
        $category->delete();

        if ($category) {
            return view('backend.diger.pozisyonlar')->with('success', 'İşlem Başarılı');
        }
        return view('backend.diger.pozisyonlar')->with('error', 'İşlem Başarısız');




    }
}
