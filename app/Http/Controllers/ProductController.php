<?php

namespace App\Http\Controllers;

use App\Models\car_model_list;
use App\Models\MyProduct;
use App\Models\Product;
use App\Models\webuser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function ShowProductList($slug = null){
        $product = $slug ? Product::where('slug', $slug)->first() : Product::all();
        return response()->json([
            'productList' => $product
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
    function AddProductClass (Request $req) {
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
        $data = new Product();

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
    // CarMakeClass
    function CarMakeClass(){
        $Make = car_model_list::pluck('car_make')->toArray();
        
        $make_data = array_unique($Make);
        $make_data = array_values($make_data);
        return response()->json(
            $make_data
        );
        
    }
    function CarModelClass($carmake){
        // $Model = car_model_list::pluck('car_model')->toArray();
        // $make = car_model_list::where("car_make", $carmake)->get();
        $make = car_model_list::where('car_make', $carmake)->pluck('car_model')->toArray();
        $make_data = array_unique($make);
        $make_data = array_values($make_data);
        return response()->json(
            $make_data
        );
    }
    function CarYearClass($carmake, $carmodel){
        $year = car_model_list::where('car_make', $carmake)->where('car_model', $carmodel)->pluck('car_year')->toArray();
        $year_data = array_unique($year);
        $year_data = array_values($year_data);

        return response()->json([
            "car_year" => $year_data,
        ]);
        
    }
    function PkCitiesClass () {
        
        $data = DB::table('pk_cities')->pluck('city_name')->toArray();
        $city_unique = array_unique($data);
        $city_unique = array_values($city_unique);
        return response()->json ([
            "city_names" => $city_unique
        ]);
    }

    // MyProduct
    public function MyProductClass(){
        // Cart::where('user_id',auth()->user()->id)->where('is_removed', false)->get();
        // $data = $id ? Product::where('id', $id)->first()  : Product::all();
        // $data = Product::where('user_id', $user_id)
        
        // user_id is colum name auth()->user()->id is name of id
        $data = Product::where('user_id',auth()->user()->id)->get();
        
        // $MyproductCollection = CartCollection::collection($carts);

        return response()->json ([
            "myproduct" => $data
        ]);
    }
}