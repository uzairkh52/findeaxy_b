<?php

namespace App\Http\Controllers;
use App\Models\Bike_make;
use App\Models\bike_year;
use App\Models\car_model_list;
use App\Models\LaptopBrand;
use App\Models\MobileBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelListTable extends Controller
{
    function BikeModelClass(){
        $Bike_make = Bike_make::all();
        $Bike_year = bike_year::all();
        return response()->json([
            "bike_make" => $Bike_make,
            "bike_year" => $Bike_year
        ]);
    }
    function MobileBrandClass(){
        $MobileBrand = MobileBrand::all();
        return response()->json([
            "mobile_brand" => $MobileBrand,
        ]);
    }
    
    function LaptopBrandClass(){
        $LaptopBrand = LaptopBrand::all();
        return response()->json([
            "laptop_brand" => $LaptopBrand,
        ]);
    }

    // 
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

    
}