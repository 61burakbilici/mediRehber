<?php

namespace App\Http\Controllers\Backend;

use App\Firmas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Firmas'] =Firmas::all()->sortBy('adisoyadi');
        return view('backend.rehber.firma', compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Firmas $firmas
     * @return \Illuminate\Http\Response
     */
    public function show(Firmas $firmas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Firmas $firmas
     * @return \Illuminate\Http\Response
     */
    public function edit(Firmas $firmas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Firmas $firmas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firmas $firmas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Firmas $firmas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Firmas $firmas)
    {
        //
    }
}
