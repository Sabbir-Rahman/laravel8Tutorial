<?php

namespace App\Http\Controllers;

use App\Models\demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserLogin;


class UserAuth extends Controller
{
    function login(){
        return view('auth/login');
    }

    function register(){
        return view('auth/register');
    }

    function create(Request $request){
        //Validate Request
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        //register new user
        $userlogin = new UserLogin;
        $userlogin->name = $request->name;
        $userlogin->username = $request->username;
        $userlogin->password = $request->password;
        $query = $userlogin->save();

        if($query){
            return back()->with('success','succesfully registered');
        }
        else
            return  back()->with('failed','Something went wrong');

    }

    function check(Request  $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        $user = UserLogin::where('username','=',$request->username)->first();
        if($user){
            if($request->password==$user->password){
                return "Logged in";
            }
            else
                return "Invalid";
        }
        else
            return "No account";
    }
}
