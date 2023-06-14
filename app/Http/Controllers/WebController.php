<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function dashboard(Request $request){
        return view('main_d');
    }
    public function landing(Request $request){
        return view('landing');
    }
}
