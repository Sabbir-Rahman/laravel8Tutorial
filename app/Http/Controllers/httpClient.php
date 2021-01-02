<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class httpClient extends Controller
{
    //
    function index(){
        $collection = Http::get("https://reqres.in/api/users?page=1");
        return view('httpClient',['data'=>$collection['data']]);
    }
}
