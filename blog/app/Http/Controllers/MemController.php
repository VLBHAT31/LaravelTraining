<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class MemController extends Controller
{
    //
    function addData(Request $req)
    {
        $user=new users;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->address=$req->address;
        return redirect('add'); 
    }
}
