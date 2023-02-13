<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DummyapiController extends Controller
{
    function DummyAPIClass ($id = null){
        return $id?User::find($id): User::all();
    }
    //dummy api
    // function DummyAPIClass (){
    //     return ([
    //         'name' => 'uzair',
    //         'email' => 'uzair@dfdf',
    //         'phone' => '034324534',
    //     ]);
    // }
}
