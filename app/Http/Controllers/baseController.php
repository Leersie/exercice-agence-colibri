<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class baseController extends Controller
{
    function inscription(){
        return view('inscription');
    }
}
