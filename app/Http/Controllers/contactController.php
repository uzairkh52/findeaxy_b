<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
    function Contact_apiClass (Request $req) {
        $data= new Contact();
        $data->name= $req-> name;
        $data->phone= $req-> phone;
        $data->email= $req-> email;
        $data->address= $req-> address;

        $result = $data -> save();

        if ($result) {
            return (
                [
                    "statuc" => "success"
                ]
            );
        } else {
            return (
                [
                    "status" => "400"
                ]
            );
        }
    }
    function Contact_apiDelete ($id) {
        $data = Contact::find($id);
        $result = $data->delete();
        if ($result) {
            return(
                [
                    "status" => "success"
                ]
            );
        } else {
            return (
                [
                    "status" => "404"
                ]
            );
        }

    }
}
