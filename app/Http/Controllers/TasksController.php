<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    function taskshow () {
        $data = ['uzair1', 'uzair2', 'uzair3', 'uzair4', ];
        $colors = ['red', 'green', 'blue', 'white'];
        return view ('task', ['task' => $data, 'colors' => $colors]);
    }
}
