<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUpload extends Controller
{
    //
    function index(Request $request){
        return $request->file('file')->store('files');//uploaded file will be store in (storage/app/files)
    }
}
