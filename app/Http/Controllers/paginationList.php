<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class paginationList extends Controller
{
    //
    function show()
    {
        $data = member::all();
        return view('paginationList',['members'=>$data]);
    }
}
