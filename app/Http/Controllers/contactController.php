<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    function contactclass(Request $req){
        $req->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required | max: 5',
        ]);
        return $req->input();
    }
}
