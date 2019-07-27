<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function index(){
        return view('mobile.index');
    }
}
