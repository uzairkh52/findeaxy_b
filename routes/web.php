<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\UploadFilecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    return view('welcome',);
});
Route::get('/about', function(){
    return redirect('service');
});
Route::get('/main/{name}', [MainController::class, 'mainClass' ]);




Route::view('noaccess', 'noaccess');

// group middleware
// Route::POST("contact", [contactController::class, "contactclass"]);
// middldeware group
Route::group(['middleware'=> ['protectgroup']],function(){
    Route::view("/contact", 'contact');
    Route::get("/task", [TasksController::class, "taskshow"]);
    
    Route::get('/service', function(){
        return view('service');
    });
});
// middldeware all site
Route::get('/gender', function(){
    return("this ise genter page");
});
// middldeware route
Route::view("country", "country")->middleware("protectroute");
Route::view("service", "service")->middleware("protectroute");

Route::POST('upload', [UploadFilecontroller::class, "uploadclass"]);
Route::view('/upload', 'upload');

// gender middleware

// crud
Route::get('/profile', [registerController::class, 'profileclass']);
Route::POST('/login', [registerController::class, 'LoginpostClass']);
Route::get('/login',  [registerController::class, 'LoginClass']);

Route::get('/logout', [registerController::class, 'LogoutClass']);



Route::get("/userlist", [registerController::class, "userlistClass"]);
// add user
Route::get("/users", [registerController::class, "usersclass"]);
Route::POST('/register', [registerController::class, 'registerClass']);
Route::view('/register', 'register');
Route::get('/users/delete/{id}', [registerController::class, 'UserDeleteClass']);
Route::get('/update/{id}', [registerController::class, 'UpdateShow']);
Route::POST('/update', [registerController::class, 'Userupdate']);


Route::get('/test', function () {
    return("sfsf");
});