<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    //
    function dbOperation()
    {
        // $data= DB::table('users')->get();
        // return view('dblist',['data'=>$data]);

        // return DB::table('users')
        // ->where('address','yyy')
        // ->get();

        // return (array)DB::table('users')->find(2);

        // return (array)DB::table('users')->count();
        return DB::table('users')
        ->where('id',1)
        ->update(
            [
                'name'=>'bbb',
                'email'=>'baa@gmail.com',
                'address'=>'ccc'
            ]
            );
    }
}
