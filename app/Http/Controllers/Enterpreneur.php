<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Enterpreneur extends Controller
{
    public function dashboard(){
        return view('enterpreneur.dashboard');
    }
}
