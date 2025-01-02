<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function createUser (Request $req) {
        $data = new User();
        $data->first_name = $req->first_name;
        $data->last_name = $req->last_name;
        $data->phone = $req->phone;
        $data->email = $req->email;
        $data->password=Hash::make($req->password);
        $result = $data->save();
        $accessToken = $data->createToken('API Token')->plainTextToken;
        
        // $response = $this->success([
        //     'token' => $accessToken,
        //     'user' => $result,
        //     'message' => 'Registration Successfull',
        // ]);
        // return $response;
        if ($result) {
            return (
                [
                    "status" => "Your account is Register",
                    "token" => $accessToken,
                    "user-data" => $data
                ]
            );
        }
    }
    function editUser(Request $req){
        $data = User::find($req->id);
        $data->id=$req->id;
        $data->first_name = $req->first_name;
        $data->last_name = $req->last_name;
        $data->phone = $req->phone;
        $data->email = $req->email;
        $data->password=Hash::make($req->password);
        $result = $data->save();
        if ($result) {
            return response()->json([
                "status" => "Your detail has been update successfully"
            ]);
        }
        
    }
    function loginUser(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }
    
        $accessToken = $user->createToken('API Token')->plainTextToken;

    
        $response = [
            'status' => "You are loged in sccessfully",
            'user' => $user,
            'token' => $accessToken
        ];
    
        return response($response, 201);
    }
    // function userDetailClass ($id = null){
    //     $data = $id ? User::find($id): User::all();
    //     return response()->json([
    //         'status' => true,
    //         'webuser' => $data
    //     ]);
        
    // }
    function getusersClass () { 
        $data = User::all();
        return UserResource::collection($data);
    }
    function usersClass(){
        $data = Auth::user();

        return new UserResource($data);

    }
    
    function getuserClass (Request $request) {
        // $userPersonalDetail = [
        //     'first_name' => Auth::user(),
        // ];
        $data =  Auth::user();
        return response()->json([
            'status' => 'Success',
            'message' => 'User Personal Detail',
            'user' => $data,
            // 'data' => array($user_personalDetail)
        ], 200);

        // resource coll
        // $user = User::get();
        // $data =  Auth::user();
        // $userResource = new UserResource($user);
        // return UserResource::collection($userResource);;

        // $user = User::findOrFail(Auth::user()->id);
        // if (is_null($user)) {
        //     return response()->json([
        //         "status" => "user is empty",
        //     ]);
        // } else {
        //     return response()->json([
        //         "status" => "user detail",
        //         "user" => $user,
        //     ]);
        // }
    }
    
}