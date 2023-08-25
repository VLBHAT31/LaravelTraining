<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    function viewLoad()
    {
        $data=['aaa','bbb',"ccc",'ddd'];
        return view("users",['users'=>$data]);
    }

}
