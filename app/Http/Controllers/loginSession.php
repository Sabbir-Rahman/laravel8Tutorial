<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginSession extends Controller
{
    //
    function userLogin(Request $req)
    {
        $data = $req->input();
        $req->session()->put('user',$data['username']);
        echo session('user');
        return redirect('profile');
    }
}
