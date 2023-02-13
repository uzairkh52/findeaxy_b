<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyapiController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\personalresorceController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\registerController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

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