<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    // crud of database
    // update
    function UpdateShow ($id){
        $data =User::find($id);
        return view('/update', ['getuser' => $data]);
    }
    function Userupdate (Request $req){
        $data=User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->city=$req->city;
        $data->password=$req->password;
        $data->save();
        return redirect('/users');
    }
    
    //delete
    function UserDeleteClass ($id) {
        $data = User::find($id);
        
        $data->delete();
        return redirect('/users');
    }
    function registerClass (Request $req) {
        $req -> validate([
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
        ]);
        // return $req->input();

        $user = new User;
        $user->name=$req->username; 
        $user->phone=$req->phone; 
        $user->email=$req->email; 
        $user->city=$req->city; 
        $user->password=$req->password;

        $result = $user->save();
        if($result) {
            return redirect('/users');
        } else {
            return redirect('/users');
        }
    }
    function LoginpostClass (Request $req) {
        $req -> validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $data = $req->input('username');
        $req ->session()->put('username', $data);
        // session()->has('user');
        if (session()->has('username')) {
            return redirect('profile');
        }
        
    }
    
    
    function LogoutClass (Request $req) {
        $req->session()->flush();
        return redirect("login");
    }
    function profileclass() {
        if (session()->has('')) {
            return redirect("login");
            # code...
        }
        return view("profile");
    }

    public function usersclass () {
        $data = User::paginate(5);
        //  $data = Http::get("https://jsonplaceholder.typicode.com/posts");
        //  return  view("user", ['userdata' => $data]);
        return view('user', ['collection' => $data]);
        
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
    function LoginClass (Request $request) {
        // return (
        //     ["status" => "success"]
        // );
        return view("login");
        // $user= User::where('email', $request->email)->first();
        // // print_r($data);
        // if (!$user || !Hash::check($request->password, $user->password)) {
        //     return response([
        //         'message' => ['These credentials do not match our records.']
        //     ], 404);
        // }
    
        // $token = $user->createToken('my-app-token')->plainTextToken;
        // $response = [
        //     'user' => $user,
        //     'token' => $token
        // ];
    
        // return response($response, 201);

        
        if (session()->has('user') ) {
            return redirect('/profile');
        }
    }
}