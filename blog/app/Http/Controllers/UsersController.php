<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function loadView($name)
    {
        return view("users",['name'=>$name]);
    }
}
