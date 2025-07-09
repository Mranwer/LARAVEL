<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('index');
});
// Route::view('user/welcome/page','welcome')->name('hm');

Route::get('welcome',[Usercontroller::class,'getUser']);

Route::get('services-page/{name}',[Usercontroller::class,'getChange']);
Route::get('about/{name}',[Usercontroller::class,'getname']);
Route::get('feedbackkkk',[Usercontroller::class,'getFeedback']);



Route::view('user-form','user-form');
Route::post('user-info',[Usercontroller::class,'getUserInfo']);


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


Route::prefix('user/page/india')->group(function(){
    Route::view('welcome','welcome');
    Route::get('show',[Usercontroller::class,'show']);
    Route::get('add',[Usercontroller::class,'add']);
    Route::get('delete',[Usercontroller::class,'delete']);   
});

Route::controller(Usercontroller::class)->group(function(){
    Route::get('show','show');
    Route::get('add','add');
    Route::get('delete','delete');
});






