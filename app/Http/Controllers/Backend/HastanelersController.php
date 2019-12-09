<?php

namespace App\Http\Controllers\Backend;

use App\Hastanelers;
use App\Http\Controllers\Controller;

class HastanelersController extends Controller
{

    public function index()
    {
        $data['hastanelers'] = Hastanelers::all()->sortBy('hastane_sira');
       // dd( $data['adminSettings']);
        return view('backend.hastaneler.index', compact('data'));
    }
}
