<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaissanceController extends Controller
{
    //
    public function create(){
        return view('mairies.actes.naissance.form_acte');
    }
}
