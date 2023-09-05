<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class MembersController extends Controller
{
    //
    function shows()
    {
        $data=users::paginate(1);
        return view('lists',['users'=>$data]);
    }
}
