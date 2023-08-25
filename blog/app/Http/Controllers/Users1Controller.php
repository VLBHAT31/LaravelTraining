<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users1Controller extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
            'username'=>'required|max:10',
            'userpassword'=>'required|min:5'
        ]);
        return  $req->input();
    }
}
