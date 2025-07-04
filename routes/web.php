<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('index');
});

Route::get('welcome',[Usercontroller::class,'getUser']);

Route::get('services-page/{name}',[Usercontroller::class,'getChange']);
Route::get('about/{name}',[Usercontroller::class,'getname']);
Route::get('feedbackkkk',[Usercontroller::class,'getFeedback']);
Route::view('user-form','user-form');
Route::post('adduser',[Usercontroller::class,'addUser']);


// Route::get('/abc', function () {
//     return view('welcome');
// });

Route::view('/login','login-form');
Route::post('login-form',[Usercontroller::class,'getLogininfo']);


// Route::get('/abc', function () {
//     return view('home');
// });

// Route::get('/abc/{name}', function ($name) {
//     // echo $name;
//     return view('welcome',['name'=>$name]);
// });

// Route::view('/abc','welcome');
// Route::view('/','index');

