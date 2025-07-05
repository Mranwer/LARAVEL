<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Usercontroller extends Controller
{
    //
    function getUser(){
        return "<h1 style='color:red;'>code step by step</h1>";
    }


    function getChange($name){
        // return "hello world";
        return view('service',['name'=>$name]);
    }
    function getname($name){
        // echo $name;
        return view('about',['name'=>$name]);
    }

    function getFeedback(){
        if(view::exists('main.feedbacks')){
        return view('main.feedbacks');
        }
        else{
            echo "not found";
        }
        
    }
    // function getBlog(){
    //     if(view::exists('pages.blog')){
    //         return view('pages.blog');
    //     }
    //     else{
    //         echo "not found";
    //     }
        
    // }
    // function addUser(){
    //     echo "this is user form";
    // }

        function addUser(Request $request){
            $request->validate([
               'name'=>'required | min:3 | max:10',
               'lastname'=>'required | max:20',
               'username'=>'required | email',

            ]);
        echo $request->name."<br><br>";
        echo $request->lastname."<br><br>";
        echo $request->username."<br><br>";

    }
    function getLogininfo(Request $req){
         $req->validate([
               'name'=>'required | min:3 | max:20',
               'lastname'=>'required | max:20',
               'username'=>'required | email',

            ]);
        echo $req->name."<br><br>";
        echo $req->lastname."<br><br>";
        echo $req->username."<br><br>";
    }
}
