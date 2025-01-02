<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Http\Resources\MyProductCollection;
use App\Models\Bike;
use App\Models\Car;
use App\Models\car_model_list;
use App\Models\Category;
use App\Models\Laptop;
use App\Models\Mobile;
use App\Models\MyProduct;
use App\Models\Myproduct as ModelsMyproduct;
use App\Models\Product;
use App\Models\User;
use App\Models\webuser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ProductController extends Controller
{
    
    function ShowLaptopProducClass($slug = null){
        // $product = $slug ? Laptop::where('slug', $slug)->first() : Laptop::all();
        // return response()->json([
        //     'productList' => $product
        // ]);
        if ($slug) {
            $data = Laptop::where('slug', $slug)->first();
        } else {
            // $data = Car::where('status', '=', 'active')->with(['user'])->get()get();
            $data = Laptop::with('user:id,phone')->where('status', '=', 'active')->get();
            return response()->json ([
               "data" => collect($data),

            ]);

        }
        
    }
    function ShowBikeProducClass($slug = null){
        // $product = $slug ? Bike::where('slug', $slug)->first() : Bike::all();
        // return response()->json([
        //     'productList' => $product
        // ]);
        if ($slug) {
            $data = Bike::where('slug', $slug)->first();
        } else {
            // $data = Car::where('status', '=', 'active')->with(['user'])->get()get();
            $data = Bike::with('user:id,phone')->where('status', '=', 'active')->get();
            return response()->json ([
               "data" => collect($data),

            ]);

        }

        
    }
    function ShowCarProductList($slug = null){
        // if ($slug) {
        //     $data = Car::where('slug', $slug)->first();
        // } else {
        //     // $data = Car::where('status', '=', 'active')->with(['user'])->get()get();
        //     $data = Car::with('user:id,phone')->where('status', '=', 'active')->get();
        //     return response()->json ([
        //        "data" => collect($data),

        //     ]);

        // }
        if ($slug) {
            # code...
            
        }
        // $data = Car::where('slug', $slug)->first();
        // return $data;

            // $data = Car::where('status', '=', 'active')->with(['user'])->get()get();
            $data = Car::with('user:id,phone')->where('status', '=', 'active')->get();
            return response()->json ([
               "data" => collect($data),

            ]);


        // $userphone = User::get();
        // return $data;
    }
    function DeleteMyProductClass($id){
        $data = Car::where('id', $id)->first();
        $data = Bike::where('id', $id)->first();
        $result=$data->delete();
        if ($result != null) {
            return response()->json([
                "status" => "Your product is delete successfully"
            ]);
        }
    }
    
    function UpdateMyProductClass(Request $req){
        $cardata = Car::find($req->id);
        $bikedata = Bike::find($req->id);
        
        $cardata->status= $req->status;
        $bikedata->status= $req->status;
        
        $carresult=$cardata->save();
        $bikeresult=$bikedata->save();
        if ($carresult) {
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
        // $id = IdGenerator::generate(['table' => 'cars', 'length' => 3, 'prefix' => 'car-0']);

        $id = IdGenerator::generate(['table' => 'cars', 'length' => 6, 'prefix' =>'01']);

        // $id = IdGene::generate(['table' => 'cars','field'=>'id', 'length' => 6, 'prefix' =>date('P')]);
        $data->id = $id;
        
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
                    "status" => "Your product is live successfully",
                    "id" => $id,
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
        $id = IdGenerator::generate(['table' => 'bikes', 'length' => 6, 'prefix' => '02']);
        $data->id = $id;
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
        // $product = $slug ? Mobile::where('slug', $slug)->first() : Mobile::all();
        // return response()->json([
        //     'productList' => $product
        // ]);
        
        if ($slug) {
            $data = Mobile::where('slug', $slug)->first();
        } else {
            // $data = Car::where('status', '=', 'active')->with(['user'])->get()get();
            $data = Mobile::with('user:id,phone')->where('status', '=', 'active')->get();
            return response()->json ([
               "data" => collect($data),

            ]);

        }
        
    }
    
    
    function AddMobileClass(Request $req){
        $data = new Mobile();
        $id = IdGenerator::generate(['table' => 'mobiles', 'length' => 6, 'prefix' => '03']);
        $data->id = $id;

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
    public function MyProductClass()
    {
        // Get the authenticated user ID
        $userId = auth()->id();
        // Fetch data from all models
        $carData = Car::where('user_id', $userId)->get();
        $bikeData = Bike::where('user_id', $userId)->get();
        $mobileData = Mobile::where('user_id', $userId)->get();
        $laptopData = Laptop::where('user_id', $userId)->get();

        // Combine all data into a single collection
        $allData = collect()
            ->merge($carData)
            ->merge($bikeData)
            ->merge($mobileData)
            ->merge($laptopData);

        // Prepare the response
        return response()->json([
            "userdata" => [
                "userid" => $userId,
            ],
            "data" => $allData,
        ]);
    }

    // laptop
    
    // create laptop
    function AddLaptopClass(Request $req){
        $data = new Laptop();
        $id = IdGenerator::generate(['table' => 'laptops', 'length' => 6, 'prefix' => '04']);
        $data->id = $id;

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