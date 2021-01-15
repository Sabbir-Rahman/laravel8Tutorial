<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class dataDelete extends Controller
{
    function show()
    {
        $data = member::all();
        return view('dataDelete',['members'=>$data]);
    }

    function delete($id){
        $data = member::find($id);
        $data->delete();
        return redirect('dataDelete');
    }
}
