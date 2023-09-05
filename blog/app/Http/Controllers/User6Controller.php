<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User6Controller extends Controller
{
    //
    function userLogin(Request $req)
    {
        $data= $req->input();
        $req->session()->put('username',$data['username']);
        return redirect('profile');
    }
}
