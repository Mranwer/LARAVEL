<?php

// use App\Http\Middleware\ageCheck;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;


Route::get('/', function () {
    return view('index');
});
Route::view('user/welcome/page','welcome')->name('hm');

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


// Route::prefix('user/page/india')->group(function(){
//     Route::view('welcome','welcome');
//     Route::get('show',[Usercontroller::class,'show']);
//     Route::get('add',[Usercontroller::class,'add']);
//     Route::get('delete',[Usercontroller::class,'delete']);   
// });

// Route::view('user/page/first','first');

Route::prefix('user/page')->group(function(){
    Route::view('first','first');
    Route::view('second','second');
    Route::view('third','third');
    Route::get('add',[Usercontroller::class,'add']);
    Route::get('show',[Usercontroller::class,'show']);
    Route::get('delete',[Usercontroller::class,'delete']);
});


Route::controller(Usercontroller::class)->group(function(){
    Route::get('show','show');
    Route::get('add','add');
    Route::get('delete','delete');
});

// Route::view('about','about')->middleware('check');

// Route::middleware('check')->group(function(){
//     Route::view('about','about');
//     Route::view('contact','contact');
//     Route::view('blog','pages.blog');
//     Route::view('service','service');
// });
    

// middleware apply directly on route

// single middleware
Route::view('service','service')->middleware(AgeCheck::class,CountryCheck::class);
// Route::view('about','about')->middleware(CountryCheck::class);

// multiple Middleware
// Route::view('about','about')->middleware(AgeCheck::class,CountryCheck::class);

// Route::view('about','about')->middleware([AgeCheck::class,CountryCheck::class]);


// db se data lane ke liye route

Route::get('users-data',[Usercontroller::class,'getData']);


Route::get('students',[Usercontroller::class,'studentData']);

Route::get('perosnal',[Usercontroller::class,'getUsersData']);



