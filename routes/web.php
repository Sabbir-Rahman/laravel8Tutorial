<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\userController;
use App\Http\Controllers\bladeTutorial;
use App\Http\Controllers\form;

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

//call controller
//Route::get("path","controller file");
//in laravel 7 Route::get("userController","Users@index");

//now at laravel 8 first have to import the controllers

Route::get("userController/{user}",[Users::class, 'index']);
Route::get("users",[userController::class,'loadView']);
Route::get("blade",[bladeTutorial::class, 'viewLoad']);
Route::post("form",[form::class,'getData']);


Route::view('hello','hello');
Route::view('about','about');
Route::view('login','form');



Route::get('/{name}', function ($name) {
    return view('name',['name'=>$name]);
});




