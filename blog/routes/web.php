<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Users1Controller;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\User3Controller;
use App\Http\Controllers\User4Controller;
use App\Http\Controllers\User5Controller;
use App\Http\Controllers\User6Controller;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\MemController;
use App\Http\Controllers\MembController;
use App\Http\Controllers\Members;


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

// Route::get('users4',[User4Controller::class,'index']);

Route::view("logins",'user');

// Route::get("user",[User5Controller::class,'testRequest']);
// Route::post("user",[User5Controller::class,'testRequest']);
// Route::put("user",[User5Controller::class,'testRequest']);
Route::delete("user",[User5Controller::class,'testRequest']);

Route::view('login','login');
Route::post("user6",[User6Controller::class,'userLogin']);
Route::view('profile','profile');

Route::get('/login', function () {
    if(session()->has('username'))
    {
        return redirect('profile');
    }
    return view('login');
});

Route::get('/logout', function () {
    if(session()->has('username'))
    {
        session()->pull('user');
    }
    return view('login');
});

Route::view('add','add');
Route::post("addmember",[AddMember::class,'add']);

Route::view('upload','upload');
Route::post('upload',[uploadController::class,'index']);

Route::view('profilelang','profilelang');
Route::get('profilelang/{lang}',function($lang){
    App::setlocale($lang);
    return view('profilelang');
});

Route::get('list',[MemberController::class,'show']);
Route::get('lists',[MembersController::class,'shows']);

Route::view('add','addmember');
Route::post('add',[MemController::class,'addData']);

Route::get('ilist',[MembController::class,'ilist']);
Route::get('delete/{id}',[MembController::class,'delete']);
Route::get('edit/{id}',[MembController::class,'showData']);
Route::post('edit',[MembController::class,'update']);

Route::get('dblist',[Members::class,'dbOperation']);