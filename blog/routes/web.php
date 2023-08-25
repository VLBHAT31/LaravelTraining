<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Users1Controller;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\User3Controller;

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
    // return view('welcome',['name'=>$name]);
    // return  redirect("about");
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::view("contact",'contact');
Route::view("about","about");
// Route::view("users","users");

//Route::get("path",'controller file');

//Route::get("users",'Users@index');

// Route::get("users/{user}",[Users::class,'index']);

// Route::get("/user/{name}",function($name){
//     return view("users",['name'=>$name]);
// });

Route::get("users",[UsersController::class,'viewLoad']);

Route::post("users1",[Users1Controller::class,'getData']);
Route::view("login","users1");

Route::view("home","home");
// Route::view("users3","users3");
Route::view("noaccess","noaccess");

// Route::group(['middleware'=>['protectePage']],function(){
//     Route::view('users3','users3');
// });

Route::view("users3","users3")->middleware('protectedPage');
Route::get('users3',[User2Controller::class,'index']);

Route::get("users3",[User3Controller::class,'getData']);