<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Car;
use App\Models\car_model_list;
use App\Models\Laptop;
use App\Models\Mobile;
use App\Models\MyProduct;
use App\Models\Product;
use App\Models\webuser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    function ShowLaptopProducClass($slug = null){
        $product = $slug ? Laptop::where('slug', $slug)->first() : Laptop::all();
        return response()->json([
            'productList' => $product
        ]);
        
    }
    function ShowBikeProducClass($slug = null){
        $product = $slug ? Bike::where('slug', $slug)->first() : Bike::all();
        return response()->json([
            'productList' => $product
        ]);
        
    }
    function ShowCarProductList($slug = null){
        $data = $slug ? Car::where('slug', $slug)->first() : Car::where('status', '=', 'active')->get();
        return response()->json([
            'productList' => $data
        ]);
    }
    function DeleteMyProductClass($id){
        $data = Product::where('id', $id)->first();
        $result=$data->delete();
        if ($result != null) {
            return response()->json([
                "status" => "Your product is delete successfully"
            ]);
        }
    }
    
    function UpdateMyProductClass(Request $req){
        $data = Car::find($req->id);
        $data->status= $req->status;
        $result=$data->save();
        if ($result) {
            return response()->json([
                "message" => "Your product is update successfully"
            ]);
        }
    }
    
    function AddCarClass (Request $req) {
          // $req->validate([
        //     // 'title' => 'bail|required|unique:posts|max:255',
        //     'web_user_id' => 'required',
        //     'category_id' => 'required',
        //     'title' => 'required',
        //     'description' => 'required',
        //     'car_make' => 'required',
        //     'car_model' => 'required',
        //     'car_drive_km' => 'required',
        //     'car_fuel' => 'required',
        //     'registration_city' => 'required',
        //     'car_documents' => 'required',
        //     'assembly' => 'required',
        //     'transmission' => 'required',
        //     'features' => 'required',
        //     'condition' => 'required',
        //     'price' => 'required',
        //     'car_images' => 'required',
        //     'location' => 'required',
        // ]);
        $data = new Car();
        $data->user_id=$req->user_id;
        $data->category_id=$req->category_id;

        $data->title=$req->title;
        $data->description=$req->description;
        $data->car_make=$req->car_make;
        $data->car_model=$req->car_model;
        $data->car_year=$req->car_year;
        $data->car_drive_km=$req->car_drive_km;
        $data->car_fuel= json_encode($req->car_fuel);
        $data->registration_city=$req->registration_city;
        $data->car_documents=$req->car_documents;
        $data->assembly=$req->assembly;
        $data->transmission=$req->transmission;
        $data->features=json_encode($req->features);
        $data->condition=$req->condition;
        $data->price=$req->price;
        $data->location=$req->location;
        $data->status=$req->status;
        // $data->car_images=$req->car_images;

        // // immages
        if($req->hasFile('car_images'))
        {
            // public is laravel key 
            $destinationPath = 'public/web_images';
            $image = $req->file('car_images');
            $name = time().'_'.$image->getClientOriginalName();
            $pathToStore = $req->file('car_images')->storeAs($destinationPath, $name);
            
            $data->car_images=$name;
        
        } else {
            return (
                "image error"
            );
        }
        
        
        $result = $data->save();
        if ($result) {
            return (
                [
                    "status" => "Your product is live successfully"
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
      
    function AddBikeClass(Request $req){
        $data = new Bike();
        $data->user_id=$req->user_id;
        $data->category_id=$req->category_id;

        $data->title=$req->title;
        $data->description=$req->description;
        $data->bike_make=$req->bike_make;
        $data->bike_year=$req->bike_year;

        $data->condition=$req->condition;
        $data->price=$req->price;
        $data->location=$req->location;
        $data->status=$req->status;
        // $data->car_images=$req->car_images;
        // // immages
        if($req->hasFile('bike_images'))
        {
            // public is laravel key 
            $destinationPath = 'public/web_images';
            $image = $req->file('bike_images');
            $name = time().'_'.$image->getClientOriginalName();
            $pathToStore = $req->file('bike_images')->storeAs($destinationPath, $name);
            
            $data->bike_images=$name;
        
        } else {
            return (
                "image error"
            );
        }
        
        
        $result = $data->save();
        if ($result) {
            return (
                [
                    "status" => "Your product is live successfully"
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
    // bike
    
    function ShowMobileProducClass($slug = null){
        $product = $slug ? Mobile::where('slug', $slug)->first() : Mobile::all();
        return response()->json([
            'productList' => $product
        ]);
        
    }
    
    
    function AddMobileClass(Request $req){
        $data = new Mobile();
        $data->user_id=$req->user_id;
        $data->category_id=$req->category_id;

        $data->title=$req->title;
        $data->description=$req->description;
        $data->mobile_brand=$req->mobile_brand;
        $data->condition=$req->condition;
        $data->price=$req->price;
        $data->location=$req->location;
        $data->status=$req->status;

        // $data->car_images=$req->car_images;
        // // immages
        if($req->hasFile('mobile_images'))
        {
            // public is laravel key 
            $destinationPath = 'public/web_images';
            $image = $req->file('mobile_images');
            $name = time().'_'.$image->getClientOriginalName();
            $pathToStore = $req->file('mobile_images')->storeAs($destinationPath, $name);
            
            $data->mobile_images=$name;
        
        } else {
            return (
                "image error"
            );
        }
        
        
        $result = $data->save();
        if ($result) {
            return (
                [
                    "status" => "Your product is live successfully"
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
    // end bike
    
    // MyProduct
    public function MyProductClass(){
        // $data = $id ? Product::where('id', $id)->first()  : Product::all();
        // $data = Product::where('user_id', $user_id)
        
        // user_id is colum name auth()->user()->id is name of id
        
        $car_data = Car::where('user_id',auth()->user()->id)->get()->toArray();
        // $bike_data = Bike::where('user_id', auth()->user()->id)->get()->toArray();
        // $mobile_data = Mobile::where('user_id', auth()->user()->id)->get()->toArray();
        // $laptop_data = Laptop::where('user_id', auth()->user()->id)->get()->toArray();
        $all_my_data = array_merge(
            $car_data,
            // $bike_data,
            // $mobile_data,
            // $laptop_data,
        );
        return ([
            "data" => $all_my_data,
        ]);
    }

    // laptop
    
    // create laptop
    function AddLaptopClass(Request $req){
        $data = new Laptop();
        $data->user_id=$req->user_id;
        $data->category_id=$req->category_id;

        $data->title=$req->title;
        $data->description=$req->description;
        $data->laptop_brand=$req->laptop_brand;
        $data->condition=$req->condition;
        $data->price=$req->price;
        $data->location=$req->location;
        $data->status=$req->status;

        // $data->car_images=$req->car_images;
        // // immages
        if($req->hasFile('laptop_images'))
        {
            // public is laravel key 
            $destinationPath = 'public/web_images';
            $image = $req->file('laptop_images');
            $name = time().'_'.$image->getClientOriginalName();
            $pathToStore = $req->file('laptop_images')->storeAs($destinationPath, $name);
            
            $data->laptop_images=$name;
        
        } else {
            return (
                "image error"
            );
        }
        
        
        $result = $data->save();
        if ($result) {
            return (
                [
                    "status" => "Your product is live successfully"
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