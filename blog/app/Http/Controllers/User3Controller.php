<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class User3Controller extends Controller
{
    //
    function getData()
    {
        return User::all();
    }
}
