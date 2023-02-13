<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    public function usersclass () {
        $data = User::paginate(5);
        //  $data = Http::get("https://jsonplaceholder.typicode.com/posts");
        //  return  view("user", ['userdata' => $data]);
        return view('user', ['userlist' => $data]);
        
    }

    public function userlistClass () {
        // $data = DB::table('users')->where('name', 'muzair4')->delete();
        
        // $data = DB::table('users')->where('id', 22)
        // ->update(
        //     ['name'=> 'muhammaduzair',
        //     'phone'=> '11111111',
        //     'email'=> 'uzairkh52@gmailmc',
        //     'city'=> 'hayderabad',]
        // );
        
        // $data = DB::table('users')->get();
        // $data = DB::table('users')->min('name');
        $data = DB::table('users')
        ->join('personal', 'users.id', '=', 'personal.id')
        // ->where('users.name', 'muhammaduzair')
        ->get();
        return view ('userlist', ['collection'=> $data]);
       
    }
    
    
    
}