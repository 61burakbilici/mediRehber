<?php

namespace App\Http\Controllers\Backend;

use App\Hastanes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HastanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hastane'] = Hastanes::all()->sortBy('adisoyadi');
        return view('backend.rehber.hastane',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hastanes  $hastanes
     * @return \Illuminate\Http\Response
     */
    public function show(Hastanes $hastanes)
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
        $Hastanes=Hastanes::where('id',$id)->first();
        return view('backend.rehber.duzenlehastane')->with('Hastanes',$Hastanes);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hastanes  $hastanes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hastanes $hastanes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hastanes  $hastanes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Users = Users::find($id);
        if ($Users->delete()) {
            return back()->with('success', 'İşlem Başarılı');
        }

        return back()->with('error', 'İşlem Başarısız');
    }

    public function sortable()
    {
//        print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $blogs = Hastanes::find(intval($value));
            $blogs->blog_must = intval($key);
            $blogs->save();
        }
        echo true;
    }


}
