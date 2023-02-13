<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use Validator;
class PersonalController extends Controller
{
    function getpersonalData ($id = null){
        return(
            $id?Personal::find($id):Personal::all()
        );
    }
    
    function personalAddClass (Request $req) {
        $personal = new Personal;
        $personal -> id = $req -> id;
        $personal -> name = $req -> name;
        $result = $personal-> save();
        if ($result) {
            return [
                "status" => "data save succcessfully"
            ];
        } else {
            return [
                "status" => "data not save"
            ];
        }
    }
    function personalUpdateClass (Request $req){
        $personal = Personal::find($req->id);
        $personal->id=$req->id;
        $personal->name=$req->name;
        $result = $personal->save();
        if ($result) {
            return [
                "status" => "update successfully"
            ];
        } else {
            return [
                "status" => "update error"
            ];
        }
    }
    // delete fuction
    function personaldeleteClass ($id) {
        $personal = Personal::find($id);
        $result= $personal ->delete();
    }
    function searchClass ($id){
        // namematch with $name keyword
        // return Personal::where("name", $name)->get();
        return Personal::where("id", "like" , "%" . $id . "%")->get();
    }
    function validateClass (Request $req) {
        $setValues = array (
            "id" => "required | max: 4",
            "name" => "required",
        );
        $validator = Validator::make($req->all(), $setValues);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 401);
        } else {
            $personal = new Personal();
            $personal->id =$req->id;
            $personal->name =$req->name;
            $result = $personal->save();
            if ($result) {
                return("data save successfully");
            } else {
                return("data not save");
            }
        }

        
        
    }
}