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
}
