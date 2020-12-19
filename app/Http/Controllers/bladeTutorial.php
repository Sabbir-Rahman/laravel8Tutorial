<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeTutorial extends Controller
{
    //
    function viewLoad(){
        $friends=['Sabbir','Sadik','Saju','Rafi','Ratul'];
        return view('bladeTutorial',['friends'=>$friends]);
    }
}
