<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function loadView(){
        return view("users",['name'=>'Md Sabbir Rahman']);
    }
}
