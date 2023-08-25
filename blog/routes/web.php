<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;

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

//Route::get("path",'controller file');

//Route::get("users",'Users@index');

// Route::get("users/{user}",[Users::class,'index']);

// Route::get("/user/{name}",function($name){
//     return view("users",['name'=>$name]);
// });

// Route::get("user/{name}",[UsersController::class,'loadView']);

Route::view("users","users");
Route::view("about","about");