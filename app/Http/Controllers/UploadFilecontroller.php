<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFilecontroller extends Controller
{
    //
    function uploadclass (Request $req){

        return $req -> file('uploadfile')->store('images');
    }
}
