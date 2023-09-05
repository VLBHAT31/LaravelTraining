<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
class MemberController extends Controller
{
    //
    function show()
    {
        $data= users::all();
        return view('list',['users'=>$data]);
    }
}
