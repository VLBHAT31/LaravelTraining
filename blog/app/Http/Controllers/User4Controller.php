<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTTP;

class User4Controller extends Controller
{
    //
    function index()
    {
        $collection = Http::get('http://localhost/crime-record-system/GetVoteCounts.php');
        return view('users4',['collection'=>$collection]);
    }
}
