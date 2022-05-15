<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class baseController extends Controller
{
    function inscription(){
        return view('inscription');
    }
    function login(){
        return view('login');
    }

    function contact(){
        return view('contact');
    }
}
