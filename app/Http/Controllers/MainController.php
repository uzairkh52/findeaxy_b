<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    function mainClass ($name){

        return view ("/main", ['name' => $name]);
    }
}
