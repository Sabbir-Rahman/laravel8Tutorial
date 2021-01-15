<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;


class listdemo extends Controller
{
    function view(){


        $data = member::all();
        return view('list',['members'=>$data]);
    }
}
