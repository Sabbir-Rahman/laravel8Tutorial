<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class paginationList extends Controller
{
    //
    function show()
    {
        $data = member::paginate(1);
        return view('paginationList',['members'=>$data]);
    }
}
