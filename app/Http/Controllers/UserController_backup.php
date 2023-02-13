<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    function userclass (){
        return DB::select("select * from personal where name = ' ' ");
    }
}
