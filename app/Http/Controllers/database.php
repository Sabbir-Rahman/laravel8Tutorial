<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class database extends Controller
{
    //
    function index(){
        //raw query
        //return DB::select("select * from user_logins");

        //work with models
        return UserLogin::all();
    }
}
