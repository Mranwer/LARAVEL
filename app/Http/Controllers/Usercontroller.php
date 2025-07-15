<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

     
    function getLogininfo(Request $req){
         $req->validate([
               'name'=>'required | min:3 | max:10',
               'lastname'=>'required | max:20',
               'username'=>'required | email',

            ],[
                'name.required'=>'first name cant be empty',
                'name.min'=>'first name have to be atleast 3 character',
                'username.email'=>'the username have must be with @'

            ]);
        echo $req->name."<br><br>";
        echo $req->lastname."<br><br>";
        echo $req->username."<br><br>";
    }



    function getUserInfo(Request $info){
       $info->validate([
          'fname'=>'required | min:3 | max:10',
          'lname'=>'required | max:20',
          'uname'=>'required | email'
       ],[
           'fname.required'=>'the first name field can not be empty',
           'fname.min'=>'पहला नाम कम से कम 3 अक्षरों से अधिक होना चाहिए।',
           'lname.required'=>'the first name field can not be empty',
           'uname.required'=>'the first name field can not be empty'
       ]);


        echo "name: " .$info->fname."<br><br>";
        echo "Lastname: " .$info->lname."<br><br>";
        echo "Username: " .$info->uname."<br><br>";       
    }


    function show(){
        return 'this is our show page';
    }
    function add(){
        return 'this is our add page';
    }
    function delete(){
        return 'this is our delete page';
    }


    // function getData(){
    //     return DB::select('select * from first');
    // }


    //  databse connect with migrate

        function getUsersData(){
            // $perosnal = DB::select('select * from first');
            // return view('perosnal',['perosnals'=>$perosnal]);
            $student = \App\Models\Student::all();
            return view('perosnal',['perosnals'=>$student]);
        }

    // function studentData(){
    //     $student = DB::select('select * from student_data');

    //     return view('student',['users'=>$student]);
    // }

    // database connect without migrate

    // //   function studentData(){
    // //     $student = DB::select('select * from application');

    // //     return view('student',['users'=>$student]);
    // }


}
