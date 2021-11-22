<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function input(){
        return view('input');
    }

    public function daftar(){
        return view('daftar');
    }
}
