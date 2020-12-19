<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($user){
        echo "$user Hello from controller \n";
        return ['name'=>"Sabbir",'age'=>22];
    }
}
