<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addMember extends Controller
{
    //
    function add(Request $req){
        $data =  $req->input();
        $req->session()->flash('username',$data['user']);
        return redirect('addMember');
    }
}
