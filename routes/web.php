<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\userController;
use App\Http\Controllers\bladeTutorial;
use App\Http\Controllers\form;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\database;
use App\Http\Controllers\httpClient;
use App\Http\Controllers\loginSession;
use App\Http\Controllers\addMember;
use App\Http\Controllers\fileUpload;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/hello', function () {
//    return view('hello');
//});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/redirect', function () {
    //return view('welcome');
    return redirect('hello');
});

Route::get("database",[database::class,'index']);


Route::view("home","home");
Route::view("noAccess","noAccess");

//call controller
//Route::get("path","controller file");
//in laravel 7 Route::get("userController","Users@index");

//now at laravel 8 first have to import the controllers


Route::get("userController/{user}",[Users::class, 'index']);
Route::get("users",[userController::class,'loadView']);
Route::get("httpClient",[httpClient::class,'index']);

Route::get("blade",[bladeTutorial::class, 'viewLoad']);
Route::post("form",[form::class,'getData']);

Route::post("uploadFile",[fileUpload::class,'index']);

Route::post("loginWithSession",[loginSession::class,'userLogin']);
Route::post("addingMember",[addMember::class,'add']);

Route::view('fileUpload','fileUpload');

Route::view('hello','hello');
Route::view('about','about');
Route::view('login','form');//login form

Route::view('addMember','addMember');

//Route::view('loginSession','loginSession');

Route::view('profile','profile');


Route::get('loginMysql',[UserAuth::class,'login']);
Route::get('register',[UserAuth::class,'register']);


Route::get('loginSession',function (){
    if(session()->has('user'))
    {
        //if already login then not login again
        return redirect('profile');

    }
    return view('loginSession');
});



Route::get('logout',function (){
    if(session()->has('user'))
    {
        //delete the session data
        session()->pull('user');
    }
    return redirect('loginSession');
})->name('logout');


Route::post('create',[UserAuth::class,'create'])->name('auth.create');
Route::post('check',[UserAuth::class,'check'])->name('auth.check');
Route::get('/{name}', function ($name) {
    return view('name',['name'=>$name]);
});



