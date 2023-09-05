<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User5Controller extends Controller
{
    //
    function testRequest(Request $req)
    {
        return $req->input();
    }
}
