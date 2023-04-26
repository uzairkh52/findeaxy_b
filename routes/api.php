<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\contactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyapiController;
use App\Http\Controllers\ModelListTable;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\personalresorceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\webuserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// crud api
Route::get('/dummydata/{id?}', [DummyapiController::class, 'DummyAPIClass']);

Route::get("/personal/{id?}", [PersonalController::class, "getpersonalData"]);
Route::POST("/personal/add", [PersonalController::class, "personalAddClass"]);

Route::PUT("/personal/update", [PersonalController::class, "personalUpdateClass"]);
Route::DELETE("/personal/delete/{id}", [PersonalController::class, "personaldeleteClass"]);
// search
Route::get("/search/{name}", [PersonalController::class, "searchClass"]);
// Route::apiResource("/personalresource", personalresorceController::class);
Route::apiResource("/personalresource", personalresorceController::class);
Route::POST("/personal/vlaidate", [PersonalController::class, "validateClass"]);
Route::POST("/user/login", [registerController::class, "LoginClass"]);

// website apis
Route::POST("/contact", [contactController::class, "Contact_apiClass"]);
Route::DELETE("/contact/{id}", [contactController::class, "Contact_apiDelete"]);

// Route::group(['middleware' => 'auth:sanctum'], function(){
//     //All secure URL's
//     // my product 
// });
Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get("/auth/users/{id?}", [AuthController::class, "userDetailClass"]);
    Route::get("/my-product", [ProductController::class, 'MyProductClass']);
    Route::DELETE("/my-product/delete/{id?}", [ProductController::class, "DeleteMyProductClass"]);
    Route::put("/my-product/update/{id?}", [ProductController::class, "UpdateMyProductClass"]);
    Route::get('/getuser', [AuthController::class, 'getuserClass']);
    Route::put('/users/update/{id}', [AuthController::class, "editUser"]);
});


// Route::get("/my-product/{id?}", [ProductController::class, 'MyProductClass']);
// Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');





// car model api
Route::POST("/product/car/add", [ProductController::class, "AddCarClass"]);
Route::get("/product/list/{slug?}", [ProductController::class, "ShowCarProductList"]);
Route::get("/car-make", [ModelListTable::class, "CarMakeClass"]);
Route::get("/car-model/{carmake}", [ModelListTable::class, "CarModelClass"]);
Route::get("/car-year/{carmake}/{carmodel}", [ModelListTable::class, "CarYearClass"]);


Route::get("/pk-cities", [ModelListTable::class, "PkCitiesClass"]);
Route::POST("/getimage", [ProductController::class, "getimageClass"]);

// bike
Route::POST("/product/bike/add", [ProductController::class, "AddBikeClass"]);
Route::get("/list/bike-make", [ModelListTable::class, "BikeModelClass"]);
Route::get("/product/bike/{slug?}", [ProductController::class, "ShowBikeProducClass"]);

// mobile rout

Route::POST("/product/mobile/add", [ProductController::class, "AddMobileClass"]);
Route::get("/list/mobile", [ModelListTable::class, "BikeModelClass"]);
Route::get("/mobile-brand", [ModelListTable::class, "MobileBrandClass"]);
Route::get("/product/mobile/{slug?}", [ProductController::class, "ShowMobileProducClass"]);

// laptop
Route::POST("/product/laptop/add", [ProductController::class, "AddLaptopClass"]);
Route::get("/list/laptop", [ModelListTable::class, "BikeModelClass"]);
Route::get("/laptop-brand", [ModelListTable::class, "LaptopBrandClass"]);
Route::get("/product/laptop/{slug?}", [ProductController::class, "ShowLaptopProducClass"]);