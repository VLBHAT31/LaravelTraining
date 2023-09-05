<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MembController extends Controller
{
    //
    function ilist()
    {
        $data=User::all();
        return view('ilist',['users'=>$data]);
    }
    function delete($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('ilist');
    }
    function showData($id)
    {
        $data=User::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data=User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('ilist');
    }
}